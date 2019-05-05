<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('sub_categories')->insert([
            'cat_id'=>'1',
            'sub_type_name' => Str::random(30)          
            ]);
    }
}
