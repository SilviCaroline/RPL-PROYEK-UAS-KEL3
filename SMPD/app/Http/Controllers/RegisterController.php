<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Role;
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Cari role anggota
        $role = Role::where('name', 'anggota')->first();

        if (!$role) {
            return back()
                ->withErrors([
                    'role' => 'Role anggota belum tersedia di database.'
                ])
                ->withInput();
        }

        // Generate kode anggota otomatis
        $lastMember = Member::orderBy('id', 'desc')->first();

        if (
            $lastMember &&
            preg_match('/MBR(\d+)/', $lastMember->member_code, $matches)
        ) {
            $nextNumber = (int)$matches[1] + 1;
        } else {
            $nextNumber = 1;
        }

        $memberCode = 'MBR' . str_pad(
            $nextNumber,
            4,
            '0',
            STR_PAD_LEFT
        );

        $member = new Member();

        $member->role_id = $role->id;
        $member->member_code = $memberCode;
        $member->name = $request->name;
        $member->email = strtolower($request->email);
        $member->password = Hash::make($request->password);
        $member->status = 'Aktif';

        $member->save();

        return redirect()
            ->route('login')
            ->with(
                'success',
                'Registrasi berhasil, silakan login.'
            );
    }
}
