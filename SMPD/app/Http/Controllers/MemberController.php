<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MemberController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $members = Member::latest()->paginate(10);

        return view(
            'admin.members.index',
            compact('members')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('admin.members.create');
    }


    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'member_code' => 'required|string|unique:members,member_code',

            'name' => 'required|string|max:255',

            'email' => 'required|email|unique:members,email',

            'status' => 'required|in:Aktif,Nonaktif',

        ]);

        Member::create([

            'member_code' => $request->member_code,

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'address' => $request->address,

            'status' => $request->status,

        ]);

        return redirect()
            ->route('members.index')
            ->with('success', 'Data anggota berhasil ditambahkan.');
    }


    /*
    |--------------------------------------------------------------------------
    | SHOW
    |--------------------------------------------------------------------------
    */

    public function show(Member $member)
    {
        return view(
            'admin.members.show',
            compact('member')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit(Member $member)
    {
        return view(
            'admin.members.edit',
            compact('member')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, Member $member)
    {
        $request->validate([

            'member_code' =>
            'required|string|unique:members,member_code,' . $member->id,

            'name' =>
            'required|string|max:255',

            'email' =>
            'required|email|unique:members,email,' . $member->id,

            'status' =>
            'required|in:Aktif,Nonaktif',

        ]);

        $member->update([

            'member_code' => $request->member_code,

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'address' => $request->address,

            'status' => $request->status,

        ]);

        return redirect()
            ->route('members.index')
            ->with('success', 'Data anggota berhasil diperbarui.');
    }


    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()
            ->route('members.index')
            ->with('success', 'Data anggota berhasil dihapus.');
    }


    /*
    |--------------------------------------------------------------------------
    | MEMBER CARD
    |--------------------------------------------------------------------------
    */

    public function card($id)
    {
        $member = Member::findOrFail($id);

        return view(
            'admin.members.card',
            compact('member')
        );
    }
}
