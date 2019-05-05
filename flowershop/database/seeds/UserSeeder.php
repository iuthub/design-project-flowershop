<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
         DB::table('users')->insert([
            'name' => Str::random(30),
            'secure_id' => Str::random(30),
            'picture_id' => '1',            
            'email' => Str::random(40),
            'address' => Str::random(60),
            'email_verified_at'=>$now,
            'password' => Str::random(50)
           ]);
    }
}
