<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop Pro',
                'price' => 1299.99,
                'picture' => 'laptop_pro.jpg',
                'description' => 'A high-performance laptop for professionals.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Smartphone X',
                'price' => 999.99,
                'picture' => 'smartphone_x.jpg',
                'description' => 'A powerful smartphone with an amazing camera.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Wireless Headphones',
                'price' => 199.99,
                'picture' => 'headphones.jpg',
                'description' => 'Noise-canceling wireless headphones.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Smart Watch',
                'price' => 299.99,
                'picture' => 'smart_watch.jpg',
                'description' => 'A stylish smartwatch with fitness tracking.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
