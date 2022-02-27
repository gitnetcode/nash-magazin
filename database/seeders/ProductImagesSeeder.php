<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 5; $i++){
            \DB::table('product_images')->insert([
                'img' => 'product_'.$i. '.jpg',
                'product_id' => 1,
                //'created_at'=>
                //'updated_at'=>
                //'new_price'=>
            ]);
        }
    }
}
