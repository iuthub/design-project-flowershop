<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
           CardSeeder::class,
           CartSeeder::class,
           CategorySeeder::class,
           ColorSeeder::class,
           CompanySeeder::class,
           FeedbackSeeder::class,
           LikeSeeder::class,
           OrderSeeder::class,
           PeriodSeeder::class,
           PictureSeeder::class,
           PriceSeeder::class,
           ProductAmountSeeder::class,
           ProductSeeder::class,
           RateSeeder::class,
           SubCategorySeeder::class,
           SubSubCategorySeeder::class,
           UserSeeder::class
       ]);

    }
}
