<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach(range(0,50) as $index)
        {
            $user = new User([
               'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'idno' => $faker->isbn10,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'password' => bcrypt($faker->password)
            ]);
            $user->save();

            print "[".$index."] : ".$user->fname."\n";
        }
    }
}
