<?php

use Illuminate\Database\Seeder;
use App\Feature;

class featuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $features = ['water','electricity','table','bed','chair','security','TV','gaming','wifi'];
        //Feature::truncate();

        foreach($features as $feature_name)
        {
            $feature = Feature::create(['name' => $feature_name]);
            print '[+] Added'.$feature_name;
        }
        print '[+] Done';

    }
}
