<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Faker\Factory;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(0, 50) as $index) {

            Order::create([
                'customer_id'   => rand(1, 50),
                'shipping_id'   => rand(1, 50),
                'total'         => rand(100, 500),
                'shipping_cost' => 60,
                'status'        => $this->randomStatus()
            ]);
        }
    }

    private function randomStatus()
    {
        return array_rand(['pending' => 'pending', 'success' => 'success', 'shipped' => 'shipped', 'returned' => 'returned'], 1);
    }

}


