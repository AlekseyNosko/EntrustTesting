<?php

use App\Permission;
use Illuminate\Database\Seeder;

class editRolesPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editRoles = new Permission();
        $editRoles->name = 'edit-roles';
        $editRoles->display_name = 'Edit roles';
        $editRoles->description = 'create\delete\edit roles';
        $editRoles->save();
    }
}
