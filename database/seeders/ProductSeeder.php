<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'description' => 'This is a description for Product 1',
                'price' => 29.99,
                'stock' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                'description' => 'This is a description for Product 2',
                'price' => 49.99,
                'stock' => 50,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 3',
                'description' => 'This is a description for Product 3',
                'price' => 19.99,
                'stock' => 200,
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
