<?php

namespace App\Http\Controllers\Craftman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomProduct;

class CustomProductController extends Controller
{
    public function index()
    {
        $customProducts = CustomProduct::where('user_id', auth()->user()->id)->get();
        return view('craftman.custom_product.read', compact('customProducts'));
    }
    public function edit($id)
    {
        $custom_product = CustomProduct::findOrFail($id);
        return view('admin.custom_product.edit', compact('custom_product'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'status' => 'required|string|max:255',
            ],
            [
                'status.required' => 'Status harus diisi',
            ]
        );

        // Mengambil produk yang ingin diubah
        $custom_product = CustomProduct::findOrFail($id);

        // Melakukan update data produk
        $custom_product->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.custom_product.show')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $custom_product = CustomProduct::findOrFail($id);
        $custom_product->delete();
        return redirect()->route('admin.custom_product.show')->with('success', 'Data berhasil dihapus');
    }
}
