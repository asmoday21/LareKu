<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materi', function (Blueprint $table) {

            $table->id();

            $table->foreignId('guru_id')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete();

            $table->enum('tema', [
                'tema1',
                'tema2',
                'tema3',
                'tema4'
            ]);

            $table->string('judul');

            $table->text('deskripsi')->nullable();

            $table->longText('konten')->nullable();

            $table->unsignedInteger('durasi')->default(0);

            $table->boolean('is_published')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};