<?php

use App\Permission;
use Illuminate\Database\Seeder;

class editPostPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editPost = new Permission();
        $editPost->name = 'edit-post';
        $editPost->display_name = 'Edit post';
        $editPost->description = 'create\delete\edit blog post';
        $editPost->save();
    }
}
