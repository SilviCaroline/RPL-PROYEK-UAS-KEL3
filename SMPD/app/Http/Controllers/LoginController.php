<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $member = Member::where(
            'email',
            $request->email
        )->first();

        if (
            !$member ||
            !Hash::check(
                $request->password,
                $member->password
            )
        ) {

            return back()
                ->with(
                    'error',
                    'Email atau password salah.'
                );
        }

        session([
            'member_id' =>
            $member->id,

            'username' =>
            $member->name,

            'role' =>
            $member->role,
        ]);

        switch ($member->role) {

            case 'admin':

                return redirect()
                    ->route('admin.dashboard');

            case 'pustakawan':

                return redirect()
                    ->route('pustakawan.dashboard');

            default:

                return redirect()
                    ->route('anggota.dashboard');
        }
    }
}
