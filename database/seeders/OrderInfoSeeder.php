<?php

namespace Database\Seeders;

use App\Models\OrderInfo;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OrderInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1, 25) as $index) {
            OrderInfo:: create([
                'order_id' => rand(1, 20),
                'product_id' => rand(1, 500),
                'product_name' => $faker->paragraph,
                'product_price' => rand(100, 500),
                'product_qty' => rand(1, 5)
            ]);
        }
    }
}
