<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung Tv',
                'price' => '1800$',
                'description' => 'A Tv with HD screen',
                'category' => 'Mobile',
                'gallery' => 'https://cdn.shopify.com/s/files/1/1934/6487/products/samsung-40-fhd-smart-led-tv-40n5300-3_1024x1024@2x.jpg?v=1569077151',
            ]
        ]);
    }
}
