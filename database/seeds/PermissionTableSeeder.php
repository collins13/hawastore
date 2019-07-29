<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $create = new App\Permission;
        $create->name ='created post';
        $create->display_name ='product post';
        $create->description = 'created a post of a product';
        $create->save();

        $edit = new App\Permission;
        $edit->name ='edit post';
        $edit->display_name ='edit product post';
        $edit->description = 'edit a post of a product';
        $edit->save();

        $delete = new App\Permission;
        $delete->name ='delete post';
        $delete->display_name ='delete product post';
        $delete->description = 'delete a post of a product';
        $delete->save();
    }
}
