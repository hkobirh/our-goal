<?php

namespace Database\Seeders;

use App\Models\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;

$faker = Factory::create();
foreach (range(0, 50) as $index) {
    Customer::create([
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->unique()->email,
        'phone' => '01722' . rand(000000, 999999),
        'password' => bcrypt('password'),
        'address' => $faker->address,
    ]);
}

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    }
}
