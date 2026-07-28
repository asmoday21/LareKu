<?php

namespace App\Http\Controllers;

use App\Models\ChatHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    /**
     * Mengambil user yang sedang login.
     *
     * Project menggunakan guard "web".
     * Guru dan siswa dibedakan melalui kolom role pada users.
     */
    private function getAuthenticatedUser(): array
    {
        $user = Auth::guard('web')->user();

        if (!$user) {
            return [
                'user' => null,
                'type' => null,
            ];
        }

        // Chatbot hanya untuk guru dan siswa
        if (!in_array($user->role, ['guru', 'siswa'])) {
            return [
                'user' => null,
                'type' => null,
            ];
        }

        return [
            'user' => $user,
            'type' => $user->role,
        ];
    }

    /**
     * Prompt Datuak berdasarkan role pengguna.
     */
    private function getSystemPrompt(string $userType): string
    {
        /*
        |--------------------------------------------------------------------------
        | Prompt Guru
        |--------------------------------------------------------------------------
        */

        if ($userType === 'guru') {
            return <<<PROMPT
Kamu adalah Datuak, asisten pembelajaran dan budaya Minangkabau untuk guru.

Tugas utama kamu adalah membantu guru memahami, menjelaskan, dan mengembangkan
materi pembelajaran mengenai Budaya Minangkabau.

Ketentuan jawaban:
- Gunakan bahasa Indonesia yang jelas, profesional, dan mudah dipahami.
- Berikan penjelasan yang sistematis dan cukup mendalam.
- Fokus pada Budaya Minangkabau.
- Gunakan konteks budaya Minangkabau yang relevan dan akurat.
- Jika menggunakan istilah Minangkabau, jelaskan arti dan konteksnya.
- Bantu membuat materi pembelajaran jika diminta.
- Bantu membuat soal, kuis, atau pertanyaan pembelajaran jika diminta.
- Bantu membuat aktivitas pembelajaran jika diminta.
- Berikan contoh yang relevan dengan proses pembelajaran.
- Sesuaikan jawaban agar dapat digunakan guru sebagai bahan pembelajaran.
- Hindari informasi yang tidak berkaitan dengan pertanyaan.

Kamu sedang berbicara dengan seorang guru.
PROMPT;
        }

        /*
        |--------------------------------------------------------------------------
        | Prompt Siswa
        |--------------------------------------------------------------------------
        */

        return <<<PROMPT
Kamu adalah Datuak, teman belajar Budaya Minangkabau untuk siswa.

Tugas utama kamu adalah membantu siswa memahami Budaya Minangkabau
dengan cara yang sederhana, menarik, ramah, dan mudah dipahami.

Ketentuan jawaban:
- Gunakan bahasa Indonesia yang sederhana dan ramah.
- Jelaskan materi secara bertahap dan mudah dipahami.
- Fokus pada Budaya Minangkabau.
- Jika menggunakan istilah Minangkabau, jelaskan artinya.
- Berikan contoh sederhana jika dapat membantu pemahaman.
- Hindari istilah yang terlalu sulit tanpa penjelasan.
- Fokus pada pertanyaan siswa.
- Jangan memberikan jawaban terlalu panjang kecuali diminta.
- Dorong siswa untuk memahami konsep, bukan sekadar menghafal.

Kamu sedang berbicara dengan seorang siswa.
PROMPT;
    }

    /**
     * Mengirim pertanyaan ke Datuak.
     */
    public function ask(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | Validasi
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([
            'question' => 'required|string|max:2000',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Ambil User
        |--------------------------------------------------------------------------
        */

        $auth = $this->getAuthenticatedUser();

        $user = $auth['user'];
        $userType = $auth['type'];

        if (!$user) {
            return response()->json([
                'success' => false,
                'error' => 'Anda belum login atau tidak memiliki akses ke Datuak.',
            ], 401);
        }

        $question = trim($validated['question']);

        /*
        |--------------------------------------------------------------------------
        | Konfigurasi Gemini
        |--------------------------------------------------------------------------
        */

        $apiKey = env('GEMINI_API_KEY');

        $model = env(
            'GEMINI_MODEL',
            'gemini-2.5-flash'
        );

        if (empty($apiKey)) {
            Log::error('GEMINI_API_KEY tidak ditemukan.');

            return response()->json([
                'success' => false,
                'error' => 'GEMINI_API_KEY belum dikonfigurasi.',
            ], 500);
        }

        /*
        |--------------------------------------------------------------------------
        | Simpan Pertanyaan User
        |--------------------------------------------------------------------------
        */

        try {
            ChatHistory::create([
                'user_id' => $user->id,
                'user_type' => $userType,
                'role' => 'user',
                'message' => $question,
            ]);

        } catch (\Throwable $e) {

            Log::error('Gagal menyimpan pertanyaan chatbot', [
                'message' => $e->getMessage(),
                'user_id' => $user->id,
                'user_type' => $userType,
            ]);

            return response()->json([
                'success' => false,
                'error' => 'Gagal menyimpan pertanyaan.',
                'message' => $e->getMessage(),
            ], 500);
        }

        try {
            /*
            |--------------------------------------------------------------------------
            | Buat Prompt
            |--------------------------------------------------------------------------
            */

            $systemPrompt = $this->getSystemPrompt(
                $userType
            );

            /*
            |--------------------------------------------------------------------------
            | Request Gemini API
            |--------------------------------------------------------------------------
            */

            $response = Http::timeout(60)
                ->connectTimeout(15)
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'X-goog-api-key' => $apiKey,
                ])
                ->post(
                    "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent",
                    [
                        'contents' => [
                            [
                                'role' => 'user',
                                'parts' => [
                                    [
                                        'text' =>
                                            $systemPrompt .
                                            "\n\n" .
                                            "Pertanyaan pengguna:\n" .
                                            $question,
                                    ],
                                ],
                            ],
                        ],

                        'generationConfig' => [
                            'temperature' => 0.7,
                            'maxOutputTokens' => 1000,
                        ],
                    ]
                );

            /*
            |--------------------------------------------------------------------------
            | Gemini Mengembalikan Error
            |--------------------------------------------------------------------------
            */

            if ($response->failed()) {

                $responseData = $response->json();

                Log::error('Gemini API Error', [
                    'status' => $response->status(),
                    'model' => $model,
                    'response' => $responseData,
                    'user_id' => $user->id,
                    'user_type' => $userType,
                ]);

                /*
                |--------------------------------------------------------------------------
                | Rate Limit / Quota
                |--------------------------------------------------------------------------
                */

                if ($response->status() === 429) {
                    return response()->json([
                        'success' => false,
                        'error' =>
                            'Kuota Datuak sedang habis atau batas penggunaan Gemini tercapai. Silakan coba kembali nanti.',
                    ], 429);
                }

                /*
                |--------------------------------------------------------------------------
                | API Key
                |--------------------------------------------------------------------------
                */

                if (
                    $response->status() === 401 ||
                    $response->status() === 403
                ) {
                    return response()->json([
                        'success' => false,
                        'error' =>
                            'API Gemini tidak dapat diakses. Periksa API Key.',
                    ], $response->status());
                }

                /*
                |--------------------------------------------------------------------------
                | Model Tidak Ditemukan
                |--------------------------------------------------------------------------
                */

                if ($response->status() === 404) {
                    return response()->json([
                        'success' => false,
                        'error' =>
                            "Model Gemini '{$model}' tidak ditemukan atau tidak tersedia.",
                    ], 404);
                }

                /*
                |--------------------------------------------------------------------------
                | Error Lain
                |--------------------------------------------------------------------------
                */

                return response()->json([
                    'success' => false,
                    'error' => 'Gemini API gagal merespons.',
                    'status' => $response->status(),

                    // Bisa dihapus ketika production
                    'details' => $responseData,
                ], $response->status());
            }

            /*
            |--------------------------------------------------------------------------
            | Ambil Jawaban Gemini
            |--------------------------------------------------------------------------
            */

            $reply = $response->json(
                'candidates.0.content.parts.0.text'
            );

            /*
            |--------------------------------------------------------------------------
            | Kalau Jawaban Kosong
            |--------------------------------------------------------------------------
            */

            if (empty($reply)) {

                Log::warning(
                    'Gemini tidak mengembalikan jawaban.',
                    [
                        'model' => $model,
                        'response' => $response->json(),
                        'user_id' => $user->id,
                        'user_type' => $userType,
                    ]
                );

                return response()->json([
                    'success' => false,
                    'error' =>
                        'Datuak belum dapat memberikan jawaban. Silakan coba lagi.',
                ], 500);
            }

            /*
            |--------------------------------------------------------------------------
            | Simpan Jawaban Datuak
            |--------------------------------------------------------------------------
            */

            ChatHistory::create([
                'user_id' => $user->id,
                'user_type' => $userType,
                'role' => 'bot',
                'message' => $reply,
            ]);

            /*
            |--------------------------------------------------------------------------
            | Response Sukses
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'success' => true,
                'reply' => $reply,
            ]);

        } catch (\Illuminate\Http\Client\ConnectionException $e) {

            /*
            |--------------------------------------------------------------------------
            | Connection Error
            |--------------------------------------------------------------------------
            */

            Log::error('Koneksi Gemini API gagal', [
                'message' => $e->getMessage(),
                'model' => $model,
                'user_id' => $user->id,
                'user_type' => $userType,
            ]);

            return response()->json([
                'success' => false,
                'error' =>
                    'Tidak dapat terhubung ke layanan Datuak. Periksa koneksi dan coba kembali.',
            ], 503);

        } catch (\Throwable $e) {

            /*
            |--------------------------------------------------------------------------
            | Error Lain
            |--------------------------------------------------------------------------
            */

            Log::error('Chatbot Error', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'model' => $model,
                'user_id' => $user->id,
                'user_type' => $userType,
            ]);

            return response()->json([
                'success' => false,
                'error' =>
                    'Terjadi kesalahan saat menghubungi Datuak.',

                // Hapus saat production jika tidak ingin
                // detail internal terlihat di frontend.
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Mengambil history chat berdasarkan
     * user yang sedang login.
     */
    public function history()
    {
        /*
        |--------------------------------------------------------------------------
        | Ambil User
        |--------------------------------------------------------------------------
        */

        $auth = $this->getAuthenticatedUser();

        $user = $auth['user'];
        $userType = $auth['type'];

        if (!$user) {
            return response()->json([
                'success' => false,
                'error' =>
                    'Anda belum login atau tidak memiliki akses ke Datuak.',
            ], 401);
        }

        try {
            /*
            |--------------------------------------------------------------------------
            | Ambil History
            |--------------------------------------------------------------------------
            */

            $chats = ChatHistory::where(
                    'user_id',
                    $user->id
                )
                ->where(
                    'user_type',
                    $userType
                )
                ->orderBy(
                    'created_at',
                    'asc'
                )
                ->get();

            /*
            |--------------------------------------------------------------------------
            | Response
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'success' => true,
                'data' => $chats,
            ]);

        } catch (\Throwable $e) {

            Log::error('Chat History Error', [
                'message' => $e->getMessage(),
                'user_id' => $user->id,
                'user_type' => $userType,
            ]);

            return response()->json([
                'success' => false,
                'error' =>
                    'Gagal mengambil riwayat percakapan.',
            ], 500);
        }
    }
}