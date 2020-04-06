<?php

use App\User;
use Illuminate\Database\Seeder;
use App\Role;

class ownerUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {;
        DB::table('users')->insert([
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('qwert123'),
        ]);
        $user = User::where('name','Owner')->first();
        $role = Role::where('name','owner')->first();
        $user->attachRole($role);
    }
}
