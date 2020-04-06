<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Permission;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $roles = Role::all();
        $data = [
            'name' => Auth::user()->name,
            'email' => Auth::user()->email
        ];
        foreach ($roles as $k => $role)
        {
            if(Auth::user()->hasRole($role->name))
            {
                $data += ['role' => $role->display_name];
            }
        }
        $permissions = Permission::all();
        $perm = [];
        foreach ($permissions as $k => $permission)
        {
            if(Auth::user()->can($permission->name))
            {
                $perm += ['permission '.($k+1) => $permission->display_name];
            }
        }
        if (empty($data['role']))
        {
            $data['role'] = 'User';
        }
        $data += ['permissions' =>$perm];
        return view('profile',$data);
    }


}
