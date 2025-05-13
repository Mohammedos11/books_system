<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'روايات', 'created_at' => now(), 'updated_at' => now(), 'user_id' => 5],
            ['name' => 'تاريخ', 'created_at' => now(), 'updated_at' => now(), 'user_id' => 5],
            ['name' => 'علم نفس', 'created_at' => now(), 'updated_at' => now(), 'user_id' => 5],
            ['name' => 'تكنولوجيا', 'created_at' => now(), 'updated_at' => now(), 'user_id' => 5],
            ['name' => 'أطفال', 'created_at' => now(), 'updated_at' => now(), 'user_id' => 5],
        ]);
    }
}
