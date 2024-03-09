<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.read', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('admin.product.create', compact('categories', 'users'));
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'image' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
        ]);
        // dd($request->all());
        // Membuat produk baru dengan menetapkan nilai id secara manual
        Product::create([

            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $request->image,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);

        // Mengembalikan redirect dengan pesan sukses jika berhasil
        return redirect()->route('admin.product.show')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'image' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
        ]);
        // Mengambil produk yang ingin diubah
        $product = Product::findOrFail($id);

        // Melakukan update data produk
        $product->update([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $request->image,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('admin.product.show')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $product =Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.product.show')->with('success', 'Data berhasil dihapus');
    }
}
