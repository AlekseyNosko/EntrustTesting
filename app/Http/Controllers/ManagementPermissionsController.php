<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Permission;

class ManagementPermissionsController extends Controller
{
    //
    public function  viewAll()
    {
        $permissions = Permission::all();
        $data = [
            'permissions' => $permissions
        ];
        return view('managementPermissions',$data);
    }
}
