<?php

use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->insert([
            'name' => Str::random(20),
            'type' => Str::random(15),
            'start_time'=>'05/06/17',
            'end_time'=>'05/06/20'
            ]);
    }
}
