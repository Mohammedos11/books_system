<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'name' => 'الرجال من المريخ والنساء من الزهرة',
                'description' => 'كتاب في العلاقات الزوجية وتفهم الشريك.',
                'price' => 80.00,
                'image' => 'book1.jpg',
                'author_id' => 1,
                'category_id' => 3,
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'الخيميائي',
                'description' => 'رواية فلسفية من تأليف باولو كويلو.',
                'price' => 90.00,
                'image' => 'book2.jpg',
                'author_id' => 2,
                'user_id' => 3,

                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'السر',
                'description' => 'كتاب عن قانون الجذب وتحقيق الأهداف.',
                'price' => 70.00,
                'image' => 'book3.jpg',
                'author_id' => 5,
                'user_id' => 3,

                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'في قلبي أنثى عبرية',
                'description' => 'رواية مستوحاة من قصة حقيقية.',
                'price' => 65.00,
                'image' => 'book4.jpg',
                'author_id' => 4,
                'category_id' => 1,
                'user_id' => 3,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'العبقريات',
                'description' => 'كتاب تاريخي من سلسلة العقاد.',
                'price' => 95.00,
                'image' => 'book5.jpg',
                'author_id' => 3,
                'category_id' => 2,
                'user_id' => 3,

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
