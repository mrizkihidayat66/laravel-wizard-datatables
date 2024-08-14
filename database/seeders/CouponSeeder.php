<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coupons')->insert([
            [
                'code' => 'SUMMER21',
                'discount_amount' => 10.00,
                'discount_type' => 'percentage',
                'valid_from' => '2024-08-01',
                'valid_until' => '2050-08-31',
                'usage_limit' => 100,
                'used' => 0,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'NEWYEAR21',
                'discount_amount' => 25.00,
                'discount_type' => 'fixed',
                'valid_from' => '2024-12-01',
                'valid_until' => '2050-12-31',
                'usage_limit' => 50,
                'used' => 10,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'BLACKFRIDAY',
                'discount_amount' => 50.00,
                'discount_type' => 'percentage',
                'valid_from' => '2024-11-27',
                'valid_until' => '2050-11-29',
                'usage_limit' => 10,
                'used' => 5,
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
