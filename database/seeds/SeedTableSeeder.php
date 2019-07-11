<?php

use Illuminate\Database\Seeder;

class SeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan make:model Seed -m
        //php artisan make:seeder SeedTableSeeder
        //php artisan migrate
        //php artisan db:seed

        $faker = Faker\Factory::create();
        $ins = [];

        for($i = 0; $i < 10; $i++){
            $ins[] = [
                'seeder' => $faker->unique()->name,
                'status' => (string) $faker->numberBetween(0, 1),
                'count' => $faker->randomDigit
            ];
         }

         DB::table('seeds')->insert($ins);
    }
}
