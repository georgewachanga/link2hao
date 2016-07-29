<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(featuresTableSeeder::class);
        $this->call(LocationCategoryTablesSeeder::class);
        $this->call(PropertyTableSeeder::class);
        $this->call(FeaturePropertyTableSeeder::class);
    }
}
