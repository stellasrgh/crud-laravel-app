<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Stella Saragih',
            'email' => 'stella@gmail.com',
            'password' => '12345678',
            'role' => 1,
            'address' => 'Jalan Apa No. 5, Yogyakarta',
            'gender' => 'Perempuan',
        ]);
    }
}
