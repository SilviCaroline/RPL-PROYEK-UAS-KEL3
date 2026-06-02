<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $roles = Role::all();

        return view(
            'admin.users.index',
            compact('roles')
        );
    }
}
