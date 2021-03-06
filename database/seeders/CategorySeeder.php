<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = Factory::create();
//        foreach (range(1,30) as $index){
//            $name = $faker->name;
//            Category::create([
//                'root'=> rand(0,5),
//                'name'=> $name,
//                'slug'=> slugify($name),
//                'status'=> $this->rendomStatus(),
//                'create_by'=> rand(1,5)
//            ]);
//        }

        $json = File::get(storage_path('my-data/categories.json'));
        // $json = file_get_contents(storage_path('my-data/brand.json'));
        $data = json_decode($json,true);
        foreach ($data as $key => $value) {
            Category::create($value);
        }
    }
    function rendomStatus(){
        return array_rand(['active'=>'active','inactive'=>'inactive'],1);
    }
}
