<?php

use Illuminate\Database\Seeder;

class ProductAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('product_amounts')->insert([
            'amount_left'=>'15',
            'amount_type' => Str::random(24),
            'unit_bunch'=>'5',
            'total'=>'100'
            
            ]);
        
    }
}
