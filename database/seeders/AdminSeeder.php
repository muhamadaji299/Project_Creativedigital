<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // password bisa diganti
            'role' => 'admin', // pastikan ada kolom 'role' di tabel users
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->command->info('Admin user berhasil dibuat!');
    }
}
