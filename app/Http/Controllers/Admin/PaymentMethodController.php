<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $payment_methods = PaymentMethod::all();
        return view('admin.payment_method.read', compact('payment_methods'));
    }

    public function create()
    {
        return view('admin.payment_method.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'code' => 'nullable|integer',
            ],
            [
                'name.required' => 'tidak boleh kosong',
            ]
        );
        PaymentMethod::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);
        return redirect()->route('admin.payment_method.show')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $payment_method = PaymentMethod::findOrFail($id);
        return view('admin.payment_method.edit', compact('payment_method'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'code' => 'nullable|integer',
            ],
            [
                'name.required' => 'tidak boleh kosong',
            ]
        );

        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->update([
            'name' => $request->name,
            'code' => $request->code,
        ]);
        return redirect()->route('admin.payment_method.show')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->delete();
        return redirect()->route('admin.payment_method.show')->with('success', 'Data berhasil dihapus');
    }
}
