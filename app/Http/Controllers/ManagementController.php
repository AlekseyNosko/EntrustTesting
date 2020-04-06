<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Role;
use App\Permission;
use App\User;
use App\Article;

class ManagementController extends Controller
{
    //
    public function appealGet()
    {
        $countArticles = Article::all()->count();
        $countRoles = Role::all()->count();
        $countPermissions = Permission::all()->count();
        $users = User::all();
        $countUsers = 0;
        $countAdmins = 0;
        foreach ($users as $k => $user)
        {
            if ($user->hasRole('admin'))
            {
                $countAdmins++;
            }
            elseif ($user->hasRole('owner'))
            {
                continue;
            }
            else
            {
                $countUsers++;
            }
        }
        $data = [
            'countAdmins' => $countAdmins,
            'countUsers' => $countUsers,
            'countArticles' => $countArticles,
            'countRoles' => $countRoles,
            'countPermissions'=> $countPermissions
        ];
        return view('management',$data);
    }

}
