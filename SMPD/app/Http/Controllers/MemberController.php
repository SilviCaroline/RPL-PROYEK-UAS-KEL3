<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    private function members()
    {
        return [
            1 => [
                'id' => 1,
                'member_code' => 'MBR001',
                'name' => 'Diana Putri',
                'email' => 'diana@email.com',
                'phone' => '081234567890',
                'address' => 'Semarang',
                'status' => 'Aktif',
            ],
            2 => [
                'id' => 2,
                'member_code' => 'MBR002',
                'name' => 'Andi Saputra',
                'email' => 'andi@email.com',
                'phone' => '082345678901',
                'address' => 'Jakarta',
                'status' => 'Aktif',
            ],
            3 => [
                'id' => 3,
                'member_code' => 'MBR003',
                'name' => 'Siti Aminah',
                'email' => 'siti@email.com',
                'phone' => '083456789012',
                'address' => 'Bandung',
                'status' => 'Nonaktif',
            ],
        ];
    }

    public function index()
    {
        $members = $this->members();
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('members.index')->with('success', 'Data anggota berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $member = $this->members()[$id] ?? abort(404);
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('members.index')->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function destroy($id)
    {
        return redirect()->route('members.index')->with('success', 'Data anggota berhasil dihapus.');
    }

    public function card($id)
    {
        $member = $this->members()[$id] ?? abort(404);
        return view('members.card', compact('member'));
    }
}