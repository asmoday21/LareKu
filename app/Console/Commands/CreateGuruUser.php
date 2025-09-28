<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateGuruUser extends Command
{
    protected $signature = 'user:create-guru {name} {email} {password}';
    protected $description = 'Buat akun guru baru';

    public function handle()
    {
        $user = User::create([
            'name' => $this->argument('name'),
            'email' => $this->argument('email'),
            'password' => Hash::make($this->argument('password')),
            'role' => 'guru',
        ]);

        $this->info("Akun guru berhasil dibuat: {$user->email}");
    }
}
