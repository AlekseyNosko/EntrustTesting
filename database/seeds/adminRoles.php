<?php

use App\Role;
use Illuminate\Database\Seeder;

class adminRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'Project Admin';
        $admin->description = 'this user is the administrator of a given project';
        $admin->save();
    }
}
