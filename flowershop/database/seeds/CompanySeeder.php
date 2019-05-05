<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('companies')->insert([
            'name'=>Str::random(20),
            'location_address'=>Str::random(50),
            'contact_number'=>Str::random(13),
            'contact_mail'=>Str::random(24),
            'terms_of_conditions'=>Str::random(60)
            ]);
    }
}
