<?php

use App\Role;
use Illuminate\Database\Seeder;

class moderatorRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moderator = new Role();
        $moderator->name = 'moderator';
        $moderator->display_name = 'Project Moderator';
        $moderator->description = 'this user is the moderator of a given project';
        $moderator->save();
    }
}
