<?php

use App\Permission;
use Illuminate\Database\Seeder;

class editUsersPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editUsers = new Permission();
        $editUsers->name = 'edit-users';
        $editUsers->display_name = 'Edit users';
        $editUsers->description = 'create\delete\edit users';
        $editUsers->save();
    }
}
