<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop ASUS',
                'description' => 'Laptop performa tinggi untuk kerja dan gaming.',
                'price' => 7500000,
                'image' => 'laptop-asus.jpg',
            ],
            [
                'name' => 'Smartphone Samsung',
                'description' => 'HP Android kamera 108MP dan baterai besar.',
                'price' => 3500000,
                'image' => 'samsung.jpg',
            ],
        ]);
    }
}
