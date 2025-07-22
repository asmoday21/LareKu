<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admintjkt@gmail.com',
            'password' => Hash::make('admintjkt'),
            'role' => 'admin' // sesuaikan dengan sistem role lo
        ]);
    }
}
