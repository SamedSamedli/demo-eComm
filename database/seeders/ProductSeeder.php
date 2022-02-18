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
                'name' => 'Iphone',
                'price' => '1800$',
                'description' => 'Iphone with 6 gb ram',
                'category' => 'Phone',
                'gallery' => 'assets/image/1.png',
            ],
            [
                'name' => 'Samsung Tv',
                'price' => '1400$',
                'description' => 'Tv with HD screen',
                'category' => 'Tv',
                'gallery' => 'assets/image/2.jpg',
            ],
            [
                'name' => 'Oneplus',
                'price' => '800$',
                'description' => 'Oneplus with 12 gb ram',
                'category' => 'Phone',
                'gallery' => 'assets/image/3.jpg',
            ],
            [
                'name' => 'Fridge',
                'price' => '2800$',
                'description' => 'Nofrost fridge',
                'category' => 'Fridge',
                'gallery' => 'assets/image/4.jpg',
            ],
            [
                'name' => 'LG Tv',
                'price' => '3800$',
                'description' => 'Tv with much more features',
                'category' => 'Tv',
                'gallery' => 'assets/image/5.jpg',
            ],
            [
                'name' => 'Samsung',
                'price' => '500$',
                'description' => 'Samsung with 3gb ram',
                'category' => 'Phone',
                'gallery' => 'assets/image/6.jpg',
            ],
        ]);
    }
}
