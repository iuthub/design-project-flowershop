<?php

use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'card_number' => Str::random(16),
            'card_month'=>'12',
            'card_year'=>'24',
            'secure_id'=>'1997'
            
        ]);
    }
}
