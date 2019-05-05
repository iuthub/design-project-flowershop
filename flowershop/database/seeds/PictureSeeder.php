<?php

use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('pictures')->insert([
            'path' => Str::random(50)
            ]);
    }
}
