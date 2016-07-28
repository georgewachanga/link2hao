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
        $features = Feature::all();
        $properties = Property::all();

        foreach($properties as $property)
        {
            $
        }
    }
}
