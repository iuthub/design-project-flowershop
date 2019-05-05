<?php

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('feedbacks')->insert([
            'user_id'=>'1',
            'feedback_text' => Str::random(100),
            'group_id'=>'1'
            ]);
        DB::table('feedbacks')->insert([
            'user_id'=>'2',
            'feedback_text' => Str::random(100),
            'group_id'=>'1'
            ]);
    }
}
