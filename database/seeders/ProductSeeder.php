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
                'category' => 'Tv',
                'gallery' => 'https://cdn.shopify.com/s/files/1/1934/6487/products/5.jpg?v=1569077151',
            ],
            [
                'name' => 'Philips Tv',
                'price' => '2000$',
                'description' => 'A Tv with HD screen',
                'category' => 'Tv',
                'gallery' => 'https://images.philips.com/is/image/PhilipsConsumer/58PUT6604_81-IMS-en_EG?$jpglarge$&wid=960',
            ],
            [
                'name' => 'Philips Tv',
                'price' => '2000$',
                'description' => 'A Tv with HD screen',
                'category' => 'Fridge',
                'gallery' => 'https://bigchill.com/Images/Products/ProFridge/ProFridge-SlateBlue-Main.jpg',
            ]
        ]);
    }
}
