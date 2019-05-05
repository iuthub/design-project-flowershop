<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('prices')->insert([
            'unit_in_USD'=>'35.70',
            'current_price'=>'200.00',
            'currency' => Str::random(24),
            'sale'=>'.1',
            'special_sale'=>'21',
            'number_urchase_for_special_sale'=>'4',
            'previous_price_unit'=>'111.50',
            'future_price_unit'=>'500.50',
            'future_price_unit_start_time'=>$now
            ]);
    }
}