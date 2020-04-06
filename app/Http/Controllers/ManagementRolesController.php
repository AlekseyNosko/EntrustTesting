<?php

namespace App\Http\Controllers;

use App\Permission;
use App\User;
use App\Role;

use Illuminate\Http\Request;

use App\Http\Requests;

class ManagementRolesController extends Controller
{
    public function  viewAll()
    {
        $roles = Role::all();
        $data = [
            'roles' => $roles
        ];
        return view('managementRoles',$data);
    }

    public function addView()
    {
        $permissions = Permission::all();
        $data = [
            'permissions' => $permissions
        ];
        return view('managementCreatRole',$data);
    }

    public function add(Request $request)
    {
            //dd($request);
            $permissions = $request->except(['_token','name','display_name','description']);
            $input = [
                'name' => $request->name,
                'display_name'=> $request->display_name,
                'description' => $request->description
            ];
            //dd($input);
            $role = new Role();
            $role->fill($input);
            $role->save();
            $role = Role::where('name',$role->name)->first();
            $role->attachPermissions(array_values($permissions));
        // equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id))
            return redirect('management/roles');
    }

    public function delete($idRole)
    {
        $role = Role::find($idRole);
        $role->users()->sync([]);
        $role->perms()->sync([]);
        $role->delete();
        return redirect('management/roles');
    }
}
