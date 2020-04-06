<?php

use App\Role;
use App\Permission;
use Illuminate\Database\Seeder;

class permissionRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //All roles
        $owner = Role::where('name','owner')->first();
        $admin = Role::where('name','admin')->first();
        $moderator = Role::where('name','moderator')->first();

        //All permissions
        $editAdminPermission = Permission::where('name','edit-admin')->first();
        $editUsersPermission = Permission::where('name','edit-users')->first();
        $editPostPermission = Permission::where('name','edit-post')->first();
        $viewPerPermission = Permission::where('name','view-permissions')->first();
        $editRolesPermission = Permission::where('name','edit-roles')->first();

        //attach permissions to roles
        $owner->attachPermissions([$editAdminPermission,$editUsersPermission,$editPostPermission,$viewPerPermission,$editRolesPermission]);
        $admin->attachPermissions([$editUsersPermission,$editPostPermission]);
        $moderator->attachPermissions([$editPostPermission]);
    }
}
