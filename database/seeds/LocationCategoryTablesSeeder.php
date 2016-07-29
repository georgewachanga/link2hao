<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\Category;



class LocationCategoryTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Location::truncate();
        //Category::truncate();


        $locs = ['Lurambi','Kefinco','Makuti','Muyala','Sichirai','Town','JoyLand','Amalemba'];
        $cats = ['Hostels','Rentals','Cottages','Apartments'];

        foreach($locs as $loc){
            Location::create(['name' => $loc]);
        }

        foreach($cats as $cat)
        {
            Category::create(['name' => $cat]);
        }


    }
}
