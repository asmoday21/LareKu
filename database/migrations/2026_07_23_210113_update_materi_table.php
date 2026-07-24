<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('materi', function (Blueprint $table) {

            if (!Schema::hasColumn('materi', 'guru_id')) {
                $table->foreignId('guru_id')
                    ->nullable()
                    ->after('id')
                    ->constrained('users')
                    ->nullOnDelete();
            }

            if (!Schema::hasColumn('materi', 'tema')) {
                $table->enum('tema', [
                    'tema1',
                    'tema2',
                    'tema3',
                    'tema4'
                ])->after('guru_id');
            }

            if (!Schema::hasColumn('materi', 'durasi')) {
                $table->unsignedInteger('durasi')->default(0);
            }

            if (!Schema::hasColumn('materi', 'is_published')) {
                $table->boolean('is_published')->default(false);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
