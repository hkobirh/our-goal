<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(1, 500) as $index) {
            $name = substr($faker->unique()->paragraph(),0,30);
            Product::create([
                'name' => $name,
                'slug' => slugify($name),
                'category_id' => rand(1, 50),
                'brand_id' => rand(1, 12),
                'model' => 'M35',
                'buying_price' => rand(50, 1000),
                'selling_price' => rand(50, 1000),
                'special_price' => rand(50, 1000),
                'special_price_from' => date('Y-m-').rand(1, 5),
                'special_price_to' => date('Y-m-').rand(4, 30),
                'quantity' => rand(50, 300),
                'sku_code' => rand(50, 300),
                'color' => json_encode($this->randomColor()),
                'size' => json_encode($this->randomSize()),
                'title' => 'Test title',
                'thumbnail' => $faker->imageUrl(),
                'image' => json_encode(['1.png','2.png']),
                'description' => $faker->paragraph,
                'status' => 'active',
                'create_by' => rand(1, 10),
                'update_by' => rand(1, 10)
            ]);
        }
    }

    function randomColor()
    {
        return array_rand(color(), 3);
    }

    function randomSize()
    {
        return array_rand(size(), 3);
    }

    function randomStatus()
    {
        return array_rand(['active' => 'active', 'inactive' => 'inactive'], 1);
    }
}
