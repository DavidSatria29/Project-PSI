<?php

namespace App\Http\Controllers\Admin;


use App\Models\CustomProduct;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CustomProductController extends Controller
{
    public function index()
    {
        $customProducts = CustomProduct::all();
        return view('admin.custom_product.read', compact('customProducts'));
    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('admin.custom_product.create', compact('categories', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'amount' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
        ]);


        // Membuat produk baru dengan menetapkan nilai id secara manual
        CustomProduct::create([

            'name' => $request->name,
            'amount' => $request->amount,
            'description' => $request->description,
            'image' => $request->image,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);

        // Mengembalikan redirect dengan pesan sukses jika berhasil
        return redirect()->route('admin.custom_product.show')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit($id)
    {
        $custom_product = CustomProduct::findOrFail($id);
        return view('admin.custom_product.edit', compact('custom_product'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'amount' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',

        ]);

        // Mengambil produk yang ingin diubah
        $custom_product = CustomProduct::findOrFail($id);

        // Melakukan update data produk
        $custom_product->update([
            'name' => $request->name,
            'amount' => $request->amount,
            'description' => $request->description,
            'image' => $request->image,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
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
