<?php

use App\Permission;
use Illuminate\Database\Seeder;

class editAdministrationPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editAdmin = new Permission();
        $editAdmin->name = 'edit-admin';
        $editAdmin->display_name = 'Edit admin';
        $editAdmin->description = 'create\delete\edit admin';
        $editAdmin->save();
    }
}
