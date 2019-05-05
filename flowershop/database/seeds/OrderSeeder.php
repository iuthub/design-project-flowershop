<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $now = Carbon::now();
         DB::table('orders')->insert([
            'product_id'=>'1',
            'product_amount' => '11',
            'start_delivery_at'=>$now,
            'received_at'=>$now
            ]);
    }
}
