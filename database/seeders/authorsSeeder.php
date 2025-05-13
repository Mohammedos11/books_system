<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class authorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'نجيب محفوظ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'جبران خليل جبران', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'طه حسين', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'أحلام مستغانمي', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'إبراهيم الفقي', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
