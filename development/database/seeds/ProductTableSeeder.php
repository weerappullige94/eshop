<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'https://static-s3.supermart.ng/productImage/1456847659916_omwpxyz12_carrot_1_kg.jpg',
        	'title' => 'Carrot',
        	'price' => 100
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://static-s3.supermart.ng/productImage/MILE183.jpg',
        	'title' => 'Chili',
        	'price' => 200
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://static-s3.supermart.ng/productImage/MILE175.jpg',
        	'title' => 'Onion',
        	'price' => 100
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://static-s3.supermart.ng/productImage/MILE159.jpg',
        	'title' => 'Tomatoes',
        	'price' => 100
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://static-s3.supermart.ng/productImage/MILE118.jpg',
        	'title' => 'Egg Plant',
        	'price' => 100
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://static-s3.supermart.ng/productImage/1454421389394_omkt800_green_pepper_6_pieces.jpg',
        	'title' => 'Green Pepper',
        	'price' => 100
        ]);

        $product->save();
    }
}
