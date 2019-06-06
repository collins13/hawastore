<?php

use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product = new \App\Product([
          'image' => '/images/food.jpg',
          'title' =>'carrots',
          'description' => 'this is desction of carrots',
          'price' => 2500
        ]);
       $product->save();
      $product = new \App\Product([
        'image' => '/images/Broccoli.jpeg',
        'title' =>'broccoli',
        'description' => 'this is desction of broccoli',
        'price' => 2500
      ]);
     $product->save();
     $product =  new \App\Product([
      'image' => '/images/Broccoli.jpeg',
      'title' =>'pili pili hoho',
      'description' => 'this is desction of pili pili hoho',
      'price' => 2500
      ]);
     $product->save();
  }
}
