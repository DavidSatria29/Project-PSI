<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentConfirmation;

class PaymentConfirmationController extends Controller
{
    public function index()
    {
        $payment_confirmations = PaymentConfirmation::all();
        return view('admin.payment_confirmation.read', compact('payment_confirmations'));
    }

    public function edit($id)
    {
        $payment_confirmation = PaymentConfirmation::findOrFail($id);
        return view('admin.payment_confirmation.edit', compact('payment_confirmation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'status' => 'required|string',
            ],
            [
                'status.required' => 'tidak boleh kosong',
            ]
        );

        $paymentConfirmation = PaymentConfirmation::findOrFail($id);
        $paymentConfirmation->update([
            'status' => $request->status,
        ]);
        return redirect()->route('admin.payment_confirmation.show')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $paymentConfirmation = PaymentConfirmation::findOrFail($id);
        $paymentConfirmation->delete();
        return redirect()->route('admin.payment_confirmation.show')->with('success', 'Data berhasil dihapus');
    }
}
