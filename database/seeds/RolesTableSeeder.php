<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new App\Role();
        $owner->name ='owner';
        $owner->display_name ='product owner';
        $owner->description ='th owner of the product i.e the website';
        $owner->save();

        $owner = new App\Role();
        $owner->name ='admin';
        $owner->display_name ='admin user';
        $owner->description ='admin user of the product i.e the website';
        $owner->save();

        $owner = new App\Role();
        $owner->name ='author';
        $owner->display_name ='author user';
        $owner->description ='author of the product i.e the website';
        $owner->save();
    }
}
