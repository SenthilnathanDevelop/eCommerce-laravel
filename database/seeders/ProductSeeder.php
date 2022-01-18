<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
        [
          'name' => 'LG Fridge',
          'price' => '600',
          'Description' => "A fridge with much more feature",
          'category' => "fridge",
          'gallery' => 'https://www.lg.com/in/images/refrigerators/md06235496/gallery/GL-D221ABCY-Refrigerators-Front-View-D-01-VF.jpg'
        ]
      );
    }
}
