<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        $member = Member::with('role')
            ->findOrFail(
                session('member_id')
            );

        return view(
            'anggota.profile.index',
            compact('member')
        );
    }

    public function edit()
    {
        $member = Member::findOrFail(
            session('member_id')
        );

        return view(
            'anggota.profile.edit',
            compact('member')
        );
    }

    public function update(Request $request)
    {
        $member = Member::findOrFail(
            session('member_id')
        );

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:1000',
        ]);

        $member->update([

            'name' => $request->name,

            'phone' => $request->phone,

            'address' => $request->address,

        ]);

        session([
            'username' => $request->name
        ]);

        return redirect()
            ->route('anggota.profile.index')
            ->with(
                'success',
                'Profil berhasil diperbarui.'
            );
    }
}
