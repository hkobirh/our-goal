<?php

namespace Database\Seeders;

use App\Models\Shipping;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(0,50) as $index){
            Shipping::create([
                'first_name' =>$faker->name,
                'last_name' =>$faker->name,
                'phone' => '01722'.rand(000000,999999),
                'address' =>$faker->address,
            ]);
        }
    }
}
