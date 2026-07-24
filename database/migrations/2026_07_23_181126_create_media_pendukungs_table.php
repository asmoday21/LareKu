<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('media_pendukungs', function (Blueprint $table) {

            $table->id();

            $table->foreignId('materi_id')
                ->constrained('materi')
                ->cascadeOnDelete();

            $table->string('judul');

            $table->enum('jenis',[
                'pdf',
                'word',
                'ppt',
                'video_upload',
                'video_youtube'
            ]);

            $table->string('file')->nullable();

            $table->string('video_url')->nullable();

            $table->integer('urutan')->default(1);

            $table->timestamps();
        });    
    }

    public function down(): void
    {
        Schema::dropIfExists('media_pendukungs');
    }
};