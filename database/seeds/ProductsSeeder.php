<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                //
        $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([ 
                'name' => $faker->name,
                'code' => $faker->unique()->numberBetween(1, 11),
                'price_buy' => 1000,
                'price_sell' => 2000,
                'stock' => 10,
                'category_id' => 1,
                'description' => $faker->sentence,
                'image' => "",
            ]);
        }
    }
}
