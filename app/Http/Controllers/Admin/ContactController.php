<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.read', compact('contacts'));
    }
    // public function create()
    // {
    //     return view('admin.contact.create');
    // }
    // public function store(Request $request)
    // {
    //     $request->validate(
    //         [
    //             'name' => 'required|string',
    //             'email' => 'required|email|unique:contacts,email',
    //             'message' => 'required|string'
    //         ],
    //         [
    //             'name.required' => 'tidak boleh kosong',
    //             'email.required' => 'tidak boleh kosong',
    //             'email.email' => 'tidak valid',
    //             'email.unique' => 'sudah terdaftar',
    //             'message.required' => 'tidak boleh kosong'
    //         ]
    //     );
    //     Contact::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'message' => $request->message
    //     ]);
    //     return redirect()->route('admin.contact.show')->with('success', 'Data berhasil ditambahkan');
    // }

    // public function edit($id)
    // {
    //     $contact = Contact::findOrFail($id);
    //     return view('admin.contact.edit', compact('contact'));
    // }
    // public function update(Request $request, $id)
    // {
    //     $request->validate(
    //         [
    //             'name' => 'required|string',
    //             'email' => 'required|email',
    //             'message' => 'required|string',
    //         ],
    //         [
    //             'name.required' => 'tidak boleh kosong',
    //             'email.required' => 'tidak boleh kosong',
    //             'email.email' => 'tidak valid',
    //             'message.required' => 'tidak boleh kosong'
    //         ]
    //     );
    //     Contact::findOrFail($id)->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'message' => $request->message
    //     ]);
    //     return redirect()->route('admin.contact.show')->with('success', 'Data berhasil diubah');
    // }
    public function delete($id)
    {
        Contact::destroy($id);
        return redirect()->route('admin.contact.show')->with('success', 'Data berhasil dihapus');
    }
}
