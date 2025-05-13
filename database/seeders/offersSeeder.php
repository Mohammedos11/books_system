<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class offersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offers')->insert([
            [
                'book_id' => 1,
                'offer_price' => 60.00,
                'start_date' => '2025-05-01',
                'end_date' => '2025-05-20',
            ],
            [
                'book_id' => 2,
                'offer_price' => 75.00,
                'start_date' => '2025-05-10',
                'end_date' => '2025-06-10',
            ],
            [
                'book_id' => 3,
                'offer_price' => 55.00,
                'start_date' => '2025-04-01',
                'end_date' => '2025-05-30',
            ],
            [
                'book_id' => 4,
                'offer_price' => 50.00,
                'start_date' => '2025-05-05',
                'end_date' => '2025-05-31',
            ],
            [
                'book_id' => 5,
                'offer_price' => 80.00,
                'start_date' => '2025-05-01',
                'end_date' => '2025-05-15',
            ],
        ]);
    }
}
