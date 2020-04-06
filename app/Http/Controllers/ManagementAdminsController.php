<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ManagementAdminsController extends Controller
{
    public function viewAll()
    {
        $admins = User::all();
        $tmp = [];
        foreach ($admins as $k => $admin)
        {
            if ($admin->hasRole('admin'))
            {
                $tmp += ['admin-'.($k+1) => $admin];
            }
            else
            {
                continue;
            }
        }
        $data = [
            'admins' => $tmp
        ];
        return view('managementAdmins',$data);
    }

    public function viewEdit($idAdmin)
    {
        $roles = Role::all();
        $user = User::find($idAdmin);
        $data = [
            'user' => $user,
            'roles' => $roles
        ];
        foreach ($roles as $k => $role)
        {
            if($user->hasRole($role->name))
            {
                $data += [
                    'roleDisplay' => $role->display_name,
                    'role' => $role->name
                ];
            }
        }
        if (empty($data['role']))
        {
            $data['role'] = 'user';
            $data['roleDisplay'] = 'User';
        }
        return view('managementUserEdit',$data);
    }

    public function edit($idAdmin,Request $request)
    {
        $user = User::find($idAdmin);
        if(isset($request->role))
        {
            $role = Role::where('name',$request->role)->first();
            if(!empty($role))
            {
                $user->roles()->sync([$role->id]);
            }
            else
            {
                $user->roles()->sync([]);
            }
        }
        else {
            return redirect('management/admins');
        }
        return redirect('management/admins');
    }

    public function delete($idAdmin)
    {
        $user = User::find($idAdmin);
        $user->roles()->sync([]);
        $user->delete();
        return redirect('management/admins');
    }

}
