<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use OpenAI;

class TestDatuak extends Command
{
    /**
     * Nama dan signature command.
     *
     * Contoh: php artisan datuak:test "Apa itu randai?"
     */
    protected $signature = 'datuak:test {question}';

    /**
     * Deskripsi command.
     */
    protected $description = 'Tes Chatbot Datuak dengan OpenAI API';

    /**
     * Eksekusi command.
     */
    public function handle()
    {
        $client = OpenAI::client(env('OPENAI_API_KEY'));

        $question = $this->argument('question');

        try {
            $result = $client->chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => "Kamu adalah asisten budaya bernama Datuak. Jawablah semua pertanyaan seputar Budaya Minangkabau dengan bahasa Indonesia yang jelas, ramah, dan sesuai konteks budaya."
                    ],
                    [
                        'role' => 'user',
                        'content' => $question,
                    ],
                ],
            ]);

            $reply = $result->choices[0]->message->content ?? 'Maaf, Datuak tidak menjawab.';

            $this->info("👉 Pertanyaan: {$question}");
            $this->line("🟢 Datuak: {$reply}");
        } catch (\Exception $e) {
            $this->error("❌ Error: " . $e->getMessage());
        }
    }
}
