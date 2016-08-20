<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'fname' => 'Magnus',
            'lname' => 'Otwani',
            'idno' => '111111111',
            'phone' => '00000000',
            'email' => 'magnusotwani@yahoo.com',
            'password' => bcrypt('Sch1z01d')
        ]);
        $user->save();
        $admin = Admin::create([]);
        $admin->user()->save($user);

        $user = new User([
            'fname' => 'George',
            'lname' => 'Wachanga',
            'idno' => '111111111',
            'phone' => '00000000',
            'email' => 'georgewachanga@gmail.com',
            'password' => bcrypt('23125835'),
        ]);
        $user->save();
        $admin = Admin::create([]);
        $admin->user()->save($user);
    }
}
