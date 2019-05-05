<?php

use Illuminate\Database\Seeder;

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
            'company_id'=>'1',
            'color_id'=>'1',
            'period_id' => '1',
            'price_id'=>'1',
            'product_amount_id'=>'1',
            'feedback_id' => '1',
            'like_id'=>'1',
            'rate_id'=>'1',
            'picture_id'=>'1',
            'sub_sub_category_id'=>'1',
            'name' => Str::random(30),
            'detailed_info' => Str::random(80)
            ]);
    }
}
