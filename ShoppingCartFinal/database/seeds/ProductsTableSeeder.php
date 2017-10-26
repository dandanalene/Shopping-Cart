<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'product_name' => 'Besh Terno',
        	'product_price' => '50',
            'image_path' => '1.jpg',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('products')->insert([
        	'product_name' => 'Besh Candy Terno',
        	'product_price' => '75',
            'image_path' => '2.jpg',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('products')->insert([
        	'product_name' => 'Besh Sweater',
        	'product_price' => '35',
            'image_path' => '3.jpg',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('products')->insert([
            'product_name' => 'Besh Tori Shoes',
            'product_price' => '55',
            'image_path' => '4.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('products')->insert([
            'product_name' => 'Besh Skirt',
            'product_price' => '50',
            'image_path' => '5.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('products')->insert([
            'product_name' => 'Besh Hyacint Bag',
            'product_price' => '40',
            'image_path' => '6.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('products')->insert([
            'product_name' => 'Besh Romper',
            'product_price' => '45',
            'image_path' => '7.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('products')->insert([
            'product_name' => 'Besh Shorts',
            'product_price' => '30',
            'image_path' => '8.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);


    }
}
