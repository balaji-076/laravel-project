<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // OR manually:
        Product::insert([
            [
                'name' => 'Laptop',
                'description' => 'High performance laptop',
                'price' => 999.99,
                'stock' => 10,
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Android device',
                'price' => 499.99,
                'stock' => 25,
            ],
        ]);
    }
}
