<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            ['name' => 'ملهم', 'user_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'جديد', 'user_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الأكثر مبيعاً', 'user_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'كلاسيكي', 'user_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'عالمي', 'user_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
