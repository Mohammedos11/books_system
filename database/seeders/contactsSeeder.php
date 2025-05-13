<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            ['name' => 'محمد', 'email' => 'mohammad@example.com', 'description' => 'أرغب في طلب كتاب معين.', 'created_at' => now(), 'updated_at' => now(), 'phone' => '05658495'],
            ['name' => 'ليلى', 'email' => 'leila@example.com', 'description' => 'هل يوجد شحن دولي؟', 'created_at' => now(), 'updated_at' => now(), 'phone' => '05658495'],
            ['name' => 'ياسر', 'email' => 'yasser@example.com', 'description' => 'وصلني كتاب تالف.', 'created_at' => now(), 'updated_at' => now(), 'phone' => '05658495'],
            ['name' => 'منى', 'email' => 'mona@example.com', 'description' => 'شكراً على الخدمة الممتازة.', 'created_at' => now(), 'updated_at' => now(), 'phone' => '05658495'],
            ['name' => 'حسام', 'email' => 'hossam@example.com', 'description' => 'هل يمكنني الدفع عند الاستلام؟', 'created_at' => now(), 'updated_at' => now(), 'phone' => '05658495'],
        ]);
    }
}
