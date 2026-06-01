<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:members',
        'password' => 'required|min:6|confirmed',
    ]);

    // Tentukan role berdasarkan domain email
    $role = 'anggota';

    if (str_ends_with($request->email, '@admin.com')) {

        $role = 'admin';

    } elseif (
        str_ends_with(
            $request->email,
            '@pustakawan.com'
        )
    ) {

        $role = 'pustakawan';
    }

    Member::create([

        'member_code' =>
        'MBR' . now()->format('YmdHis'),

        'name' =>
        $request->name,

        'email' =>
        $request->email,

        'password' =>
        Hash::make(
            $request->password
        ),

        'role' =>
        $role,

        'status' =>
        'Aktif',
    ]);

    return redirect()
        ->route('login')
        ->with(
            'success',
            'Registrasi berhasil, silakan login.'
        );
    }
}