<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.read', compact('users'));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
                'role' => 'required|string'
            ],
            [
                'name.required' => 'tidak boleh kosong',
                'email.required' => 'tidak boleh kosong',
                'email.email' => 'tidak valid',
                'email.unique' => 'sudah terdaftar',
                'password.required' => 'tidak boleh kosong',
                'password.min' => 'minimal 8 karakter',
                'role.required' => 'tidak boleh kosong'
            ]
        );
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);
        return redirect()->route('admin.user.show')->with('success', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'role' => 'required|string'
            ],
            [
                'name.required' => 'tidak boleh diubah',
                'role.required' => 'tidak boleh kosong'
            ]
        );
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'role' => $request->role
        ]);
        return redirect()->route('admin.user.show')->with('success', 'Data berhasil diubah');
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.user.show')->with('success', 'Data berhasil dihapus');
    }
}
