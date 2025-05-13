<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            [
                'name' => 'أحمد علي',
                'email' => 'ahmed@example.com',
                'password' => Hash::make('password'),
                'image' => 'default.png',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'منى خالد',
                'email' => 'mona@example.com',
                'password' => Hash::make('password'),
                'image' => 'default.png',
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'سامي يوسف',
                'email' => 'sami@example.com',
                'password' => Hash::make('password'),
                'image' => 'default.png',
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'رنا فؤاد',
                'email' => 'rana@example.com',
                'password' => Hash::make('password'),
                'image' => 'default.png',
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'خالد حسن',
                'email' => 'khaled@example.com',
                'password' => Hash::make('password'),
                'image' => 'default.png',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
