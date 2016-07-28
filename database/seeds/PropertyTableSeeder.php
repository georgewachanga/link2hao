<?php

use Illuminate\Database\Seeder;
use App\Property;
use App\Category;
use App\Location;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        //Property::truncate();
        foreach(range(0,20) as $index)
        {
            $property=new Property([
                'name'=> $faker->city,
                'price'=> $faker->numberBetween(15,200) *  100,
                'description'=> $faker->text,
                'imagepath'=>'images/'.rand(1,5).'.jpg',
                'ownerIdNo'=>rand(0,20)
            ]);
            $property->save();
            $cat = Category::find(rand(1, Category::count()));
            $loc = Location::find(rand(1, Location::count()));

            $cat->properties()->save($property);
            $loc->properties()->save($property);

            print '[+] Added '.$property->name."\n";
            print "[******]\n";
            print "\n";

        }


    }

}
