<?php

use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('carts')->insert([   
         'product_id'=>'1',
         'product_amount'=>'3'
          ]);
    }
}
