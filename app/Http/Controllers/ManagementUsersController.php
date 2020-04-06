<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class ManagementUsersController extends Controller
{
    //
    public function viewAll()
    {
        $users = User::all();
        $dataUsers = [];
        $dataModerators = [];
        foreach ($users as $k => $user)
        {
            if($user->hasRole('owner'))
            {
                continue;
            }
            elseif ($user->hasRole('admin'))
            {
                continue;
            }
            elseif ($user->hasRole('moderator'))
            {
                $dataModerators += ['moderator-'.($k+1) => $user];
            }
            else
            {
                $dataUsers += ['user-'.($k+1) => $user];
            }
        }
        $data = [
            'moderators' => $dataModerators,
            'users' => $dataUsers
        ];
        return view('managementUsers',$data);
    }

    public function viewEdit($idUser)
    {
        $roles = Role::all();
        $user = User::find($idUser);
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

    public function edit($idUser,Request $request)
    {
        $user = User::find($idUser);
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
            return redirect('management/users');
        }
        return redirect('management/users');
    }

    public function delete($idUser)
    {
        $user = User::find($idUser);
        $user->roles()->sync([]);
        $user->delete();
        return redirect('management/users');
    }

}
