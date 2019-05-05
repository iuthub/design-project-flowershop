<?php

use Illuminate\Database\Seeder;

class SubSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('sub_sub_categories')->insert([
            'sub_id'=>'1',
            'product_id'=>'1',
            'sub_sub_type_name' => Str::random(30)          
            ]);
    }
}
