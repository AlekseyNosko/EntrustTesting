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
         $this->call(adminRoles::class);
        $this->call(editAdministrationPermission::class);
        $this->call(editPostPermission::class);
        $this->call(editUsersPermission::class);
        $this->call(editRolesPermission::class);
        $this->call(moderatorRoles::class);
        $this->call(ownerRoles::class);
        $this->call(ownerUsers::class);
        $this->call(permissionRole::class);
        $this->call(viewPerPermission::class);
    }
}
