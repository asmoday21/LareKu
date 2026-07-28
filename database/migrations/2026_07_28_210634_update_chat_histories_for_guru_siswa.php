<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('chat_histories', function (Blueprint $table) {

            // Hapus foreign key user_id -> users.id
            $table->dropForeign(['user_id']);

            // Tambahkan tipe pengguna
            $table->enum('user_type', ['guru', 'siswa'])
                ->nullable()
                ->after('user_id');

            $table->index(
                ['user_type', 'user_id'],
                'chat_histories_user_index'
            );
        });
    }

    public function down(): void
    {
        Schema::table('chat_histories', function (Blueprint $table) {

            $table->dropIndex('chat_histories_user_index');

            $table->dropColumn('user_type');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }
};