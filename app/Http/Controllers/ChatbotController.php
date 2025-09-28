<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ChatHistory;

class ChatbotController extends Controller
{
    public function ask(Request $request)
    {
        $question = $request->input('question');

        // Simpan pertanyaan user ke DB
        ChatHistory::create([
            'user_id' => auth()->id(), // kalau ada login
            'role'    => 'user',
            'message' => $question,
        ]);

        try {
            // Panggil Gemini API
            $response = Http::withHeaders([
                'Content-Type'   => 'application/json',
                'X-goog-api-key' => env('GEMINI_API_KEY'),
            ])->post(
                "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent",
                [
                    "contents" => [[
                        "parts" => [
                            [
                                "text" => "Kamu adalah asisten budaya bernama Datuak. Jawablah semua pertanyaan seputar Budaya Minangkabau dengan bahasa Indonesia, jelas, ramah, dan sesuai konteks budaya."
                            ],
                            [
                                "text" => $question
                            ]
                        ]
                    ]]
                ]
            );

            $reply = $response->json('candidates.0.content.parts.0.text') ?? "⚠️ Tidak ada respon dari Datuak.";

            // Simpan jawaban bot ke DB
            ChatHistory::create([
                'user_id' => auth()->id(),
                'role'    => 'bot',
                'message' => $reply,
            ]);

            return response()->json([
                'reply' => $reply
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function history()
    {
        $chats = ChatHistory::where('user_id', auth()->id())
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($chats);
    }
}
