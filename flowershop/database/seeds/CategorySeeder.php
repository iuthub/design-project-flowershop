<?php

use Illuminate\Database\Seeder;
//use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$now = Carbon::now();
        DB::table('categories')->insert([
            ['cat_type_name'=>'Flower'],
            ['cat_type_name'=>'Plant'],
            ['cat_type_name'=>'Occasion'],
            ['cat_type_name'=>'Cake'],
            ['cat_type_name'=>'Gift'],
            ['cat_type_name'=>'Personialized']
        ]);
    }
}