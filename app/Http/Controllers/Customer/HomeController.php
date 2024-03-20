<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function contact()
    {
        return view('customer.contact');
    }

    public function storeCOntact(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'message' => 'required'
            ],
            [
                'name.required' => 'Nama Wajib diisi',
                'email.required' => 'Email wajib diisi',
                'phone.required' => 'phone wajib diisi',
                'message.required' => 'pesan wajib diisi',
                'phone.numeric' => 'nomor telepon harus berupa angka',
                'email.email' => 'format email tidak valid'
            ]
        );

        Contact::create($request->all());
        return redirect()->back()->with('success', 'Terima kasih atas pesannya. Kami akan balas secepatnya.');
    }
    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('customer.profil.profile', compact('user'));
    }

    public function editProfile($id)
    {
        $user = User::find($id);
        return view('customer.profil.edit', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'address' => 'required'
            ],
            [
                'name.required' => 'Nama Wajib diisi',
                'email.required' => 'Email wajib diisi',
                'phone.required' => 'phone wajib diisi',
                'address.required' => 'alamat wajib diisi',
                'phone.numeric' => 'nomor telepon harus berupa angka',
                'email.email' => 'format email tidak valid'
            ]
        );

        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('user.profile')->with('success', 'Profil berhasil diupdate');
    }
}
