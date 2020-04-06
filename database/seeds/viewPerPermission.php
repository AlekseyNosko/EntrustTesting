<?php

use App\Permission;
use Illuminate\Database\Seeder;

class viewPerPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editUsers = new Permission();
        $editUsers->name = 'view-permissions';
        $editUsers->display_name = 'View permissions';
        $editUsers->description = 'View permissions';
        $editUsers->save();
    }
}
