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

        $request->validate(
            [
                'id' => 'required|string|max:255|unique:products,id',
                'name' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'size' => 'required|string|max:255',
                'color' => 'required|string|max:255',
                'price' => 'required|integer',
                'stock' => 'required|integer',
                'image' => 'required',
                'image.*' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'id.required' => 'tidak boleh kosong',
                'name.required' => 'tidak boleh kosong',
                'type.required' => 'tidak boleh kosong',
                'size.required' => 'tidak boleh kosong',
                'color.required' => 'tidak boleh kosong',
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
            $integerCategory = intval($charCategory);
            $users = User::where('alias', $charProduct)->pluck('id')->first();
        }

        if ($request->has('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $image_name = $image->getClientOriginalName();
            $file_name = time() . '_' . $image_name;
            $path = 'assets/img/products';
            $image->move($path, $file_name);
        }
        // Membuat produk baru dengan menetapkan nilai id secara manual
        Product::create([
            'id' => $request->id,
            'name' => $request->name,
            'type' => $request->type,
            'size' => $request->size,
            'color' => $request->color,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $file_name,
            'category_id' => $integerCategory,
            'user_id' => $users,
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
        $request->validate(
            [
                'id' => 'nullable|string|max:255',
                'name' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'size' => 'required|string|max:255',
                'color' => 'required|string|max:255',
                'price' => 'required|integer',
                'stock' => 'required|integer',
                'image' => 'nullable',
                'image.*' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'id.required' => 'tidak boleh kosong',
                'name.required' => 'tidak boleh kosong',
                'type.required' => 'tidak boleh kosong',
                'size.required' => 'tidak boleh kosong',
                'color.required' => 'tidak boleh kosong',
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
            $extension = $image->getClientOriginalExtension();
            $image_name = $image->getClientOriginalName();
            $file_name = time() . '_' . $image_name;
            $path = 'assets/img/products';
            $image->move($path, $file_name);
        }
        // Mengambil produk yang ingin diubah
        $product = Product::findOrFail($id);

        // Melakukan update data produk
        $updateData = [
            'id' => $request->id,
            'name' => $request->name,
            'type' => $request->type,
            'size' => $request->size,
            'color' => $request->color,
            'price' => $request->price,
            'stock' => $request->stock,
        ];

        // Jika ada file gambar yang diunggah, tambahkan 'image' ke dalam array $updateData
        if ($request->hasFile('image')) {
            $updateData['image'] = $file_name;
        }
        // Melakukan update data produk
        $product->update($updateData);
        // Mengembalikan redirect dengan pesan sukses jika berhasil
        return redirect()->route('admin.product.show')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.product.show')->with('success', 'Data berhasil dihapus');
    }
}
