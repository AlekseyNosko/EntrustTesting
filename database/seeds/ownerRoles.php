<?php

use Illuminate\Database\Seeder;
use App\Role;

class ownerRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new Role();
        $owner->name = 'owner';
        $owner->display_name = 'Project Owner';
        $owner->description = 'this user is the owner of a given project';
        $owner->save();
    }
}
