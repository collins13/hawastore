<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = 'elijah mwangi';
        $user->email ='elijamacharia54@gmail.com';
        $user->password = '123456';
        $user->save();

        $user = new App\User;
        $user->name = 'rashid';
        $user->email ='rashidcollins16@gmail.com';
        $user->password = '123456';
        $user->save();

    }
}
