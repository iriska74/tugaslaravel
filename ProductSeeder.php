<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Laptop ASUS',
            'description' => 'Laptop performa tinggi untuk kerja dan gaming',
            'price' => 7500000,
            'image' => 'laptop-asus.jpg'
        ]);

        Product::create([
            'name' => 'Smartphone Samsung',
            'description' => 'HP Android kamera jernih dan cepat',
            'price' => 3500000,
            'image' => 'samsung.jpg'
        ]);
    }
}
