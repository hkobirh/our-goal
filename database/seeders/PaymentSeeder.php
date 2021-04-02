<?php

namespace Database\Seeders;

use App\Models\Payment;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
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
            Payment::create([
                'order_id'=> rand(1,25),
                'type'=>'bKash',
                'status'=> $this->randomStatus()
          ]);
        }
    }
    private function randomStatus()
    {
        return array_rand(['pending' => 'pending', 'success' => 'success'], 1);
    }
}
