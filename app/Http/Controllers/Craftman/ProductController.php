<?php

namespace App\Http\Controllers\Craftman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('user_id', auth()->user()->id)->get();
        return view('craftman.product.read', compact('products'));
    }

    public function create()
    {
        return view('craftman.product.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'id' => 'required|string|max:8|unique:products,id',
                'name' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'price' => 'required|integer',
                'stock' => 'required|integer',
                'image' => 'required',
                'image.*' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'id.required' => 'tidak boleh kosong',
                'name.required' => 'tidak boleh kosong',
                'type.required' => 'tidak boleh kosong',
                'price.required' => 'tidak boleh kosong',
                'stock.required' => 'tidak boleh kosong',
                'image.required' => 'tidak boleh kosong',
                'image.*.file' => 'file harus berupa gambar',
                'image.*.mimes' => 'format file harus jpeg, png, jpg, gif, atau svg',
                'image.*.max' => 'ukuran file maksimal 2048 KB',
            ]
        );

        if ($request->has('id')) {
            $id = $request->id;
            $charCategory = substr($id, 3, 1);
            $charProduct = substr($id, 0, 3);
            $getId = substr($id, 0, 4);
            $total = $charProduct . $charCategory;
            $integerCategory = intval($charCategory);
            $users = User::where('alias', $charProduct)->pluck('id')->first();

            if ($getId != $total) {
                return redirect()->route('craftman.product.create')->with('error', '4 huruf awal ID harus sesaui dengan alias pengrajin dan kategori produk yang sesuai');
            }
        }

        if ($request->has('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $file_name = time() . '_' . $image_name;
            $path = 'assets/admin/img/products';
            $image->move($path, $file_name);
        }
        // Membuat produk baru dengan menetapkan nilai id secara manual
        Product::create([
            'id' => $request->id,
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $file_name,
            'category_id' => $integerCategory,
            'user_id' => $users,
        ]);

        // Mengembalikan redirect dengan pesan sukses jika berhasil
        return redirect()->route('carftman.product.show')->with('success', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('craftman.product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'id' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'price' => 'required|integer',
                'stock' => 'required|integer',
                'image' => 'nullable',
                'image.*' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'id.required' => 'tidak boleh kosong',
                'name.required' => 'tidak boleh kosong',
                'type.required' => 'tidak boleh kosong',
                'price.required' => 'tidak boleh kosong',
                'stock.required' => 'tidak boleh kosong',
                'image.required' => 'tidak boleh kosong',
                'image.*.file' => 'file harus berupa gambar',
                'image.*.mimes' => 'format file harus jpeg, png, jpg, gif, atau svg',
                'image.*.max' => 'ukuran file maksimal 2048 KB',
            ]
        );
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $file_name = time() . '_' . $image_name;
            $path = 'assets/admin/img/products';
            $image->move($path, $file_name);
        }
        // Mengambil produk yang ingin diubah
        $product = Product::findOrFail($id);

        // Melakukan update data produk
        $product->update([
            'id' => $request->id,
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $file_name,
        ]);
        return redirect()->route('craftman.product.show')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('craftman.product.show')->with('success', 'Data berhasil dihapus');
    }
}
