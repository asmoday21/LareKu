<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('media_pendukung', function (Blueprint $table) {
            $table->id();

            $table->string('tema');
            $table->string('judul');

            $table->enum('jenis', [
                'video',
                'dokumen'
            ]);

            $table->text('link')->nullable();

            $table->string('file')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_pendukung');
    }
};
