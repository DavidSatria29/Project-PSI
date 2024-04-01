<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('payment_methods')->insert([
            [
                'name' => 'BCA',
            ],
            [
                'name' => 'BNI',
            ],
            [
                'name' => 'BRI',
            ],
            [
                'name' => 'OVO',
            ],
            [
                'name' => 'GOPAY',
            ],
            [
                'name' => 'DANA',
            ],
            [
                'name' => 'ShopeePay',
            ],
            [
                'name' => 'COD',
            ]
        ]);
    }
}
