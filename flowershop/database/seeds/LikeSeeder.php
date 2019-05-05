<?php

use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            'user_id'=>'2',
            'disliked'=> '1',
            'liked'=>'0'
            ]);
        DB::table('likes')->insert([
            'user_id'=>'1',
            'disliked'=> '0',
            'liked'=>'1'
            ]);
    }
}
