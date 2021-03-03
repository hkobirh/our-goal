<?php

namespace Database\Seeders;

use App\Models\Brand;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(1,10) as $index){
            $name = substr($faker->unique()->name,1,10);
            Brand::create([
                'name'=>$name,
                'slug'=>$name,
                'status'=>$this->randomStatus(),
                'create_by'=>rand(1,11),
            ]);
        }
    }
    public function randomStatus(){
        return array_rand(['active'=>'active','inactive'=>'inactive'],1);
    }
}
