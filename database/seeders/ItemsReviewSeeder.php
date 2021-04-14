<?php

namespace Database\Seeders;

use App\Models\ItemsReview;
use Illuminate\Database\Seeder;

class ItemsReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0, 50) as $index) {
            ItemsReview::create([
                "customer_id" => rand(1, 50),
                "product_id"  => rand(1, 500),
                "rating"      => rand(1, 5),
                "message"     => "message",
                "status"      => "hidden"
            ]);
        }
    }
}
