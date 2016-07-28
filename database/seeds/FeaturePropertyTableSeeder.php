<?php

use Illuminate\Database\Seeder;
use App\Feature;
use App\Property;

class FeaturePropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = Property::all();

        foreach($properties as $property)
        {
            $count = 0;
            $rand = rand(3,7);
            while($count < $rand)
            {
                $feature = Feature::find(rand(1,Feature::count()));
                if($property->features->contains($feature))
                {
                    print "[!} Has feature";
                    print $count;
                    continue;
                }
                else{
                    $property->features()->save($feature);
                    $count ++;
                    print $count."\n";
                }
            }
            print "[**************************]";
            print "\n";
        }
    }
}
