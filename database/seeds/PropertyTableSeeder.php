<?php

use Illuminate\Database\Seeder;
use App\Property;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['rental','hostel'];
        $faker = \Faker\Factory::create();

        //Property::truncate();
        foreach(range(0,20) as $index)
        {
            $property=new Property([
                'name'=> $faker->city,
                'category'=>$categories[array_rand($categories)],
                'price'=> $faker->numberBetween(15,200) *  100,
                'location'=>$faker->country,
                'description'=> $faker->text,
                'imagepath'=>'images/'.rand(1,5).'.jpg',
                'ownerIdNo'=>rand(0,20)

            ]);
            $property->save();

            print '[+] Added '.$property->name.'\n';
        }


    }

}
