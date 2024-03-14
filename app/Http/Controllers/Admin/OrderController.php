<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.read', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.order.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'status' => 'required',
            ],
            [
                'status.required' => 'Status tidak boleh kosong',
            ]
        );

        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.order.show')->with('success', 'Data berhasil diubah');
    }


    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('admin.order.show')->with('success', 'Data berhasil dihapus');
    }
}
