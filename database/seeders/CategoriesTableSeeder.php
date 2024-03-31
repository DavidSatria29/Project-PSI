<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('categories')->insert([
            [
                'name' => 'Asli',
                'description' => 'Produk asli yang dibuat oleh pengrajin lokal kampung wisata keramik Dinoyo Malang',
            ],
            [
                'name' => 'Custom',
                'description' => 'Produk custom yang dibuat sesuai dengan keinginan pelanggan',
            ],
        ]);
    }
}
