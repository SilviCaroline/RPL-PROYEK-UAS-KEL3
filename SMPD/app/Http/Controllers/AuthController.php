<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class AuthController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | LOGIN PAGE
    |--------------------------------------------------------------------------
    */

    public function login()
    {
        return view('auth.login');
    }


    /*
    |--------------------------------------------------------------------------
    | LOGIN PROCESS
    |--------------------------------------------------------------------------
    */

    public function loginPost(Request $request)
    {
        // Ambil role dari form login
        $role = $request->input('role', 'pengunjung');

        // Simpan role ke session
        Session::put('role', $role);

        /*
        |--------------------------------------------------------------------------
        | REDIRECT BERDASARKAN ROLE
        |--------------------------------------------------------------------------
        */

        // ADMIN
        if ($role == 'admin') {

            return redirect()
                ->route('admin.dashboard');

        }

        // PUSTAKAWAN
        if ($role == 'pustakawan') {

            return redirect()
                ->route('pustakawan.dashboard');

        }

        // PENGUNJUNG
        return redirect()
            ->route('pengunjung.dashboard');
    }


    /*
    |--------------------------------------------------------------------------
    | REGISTER PAGE
    |--------------------------------------------------------------------------
    */

    public function register()
    {
        return view('auth.register');
    }


    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout()
    {
        Session::flush();

        return redirect()
            ->route('login');
    }
}