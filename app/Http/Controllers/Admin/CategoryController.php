<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.read', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ],
            [
                'name.required' => 'tidak boleh kosong',
            ]
        );

        // Membuat kategori baru
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Mengembalikan redirect dengan pesan sukses jika berhasil
        return redirect()->route('admin.category.show')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ],
            [
                'name.required' => 'tidak boleh kosong',
            ]
        );
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.category.show')->with('success', 'Data berhasil diubah');
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category.show')->with('success', 'Data berhasil dihapus');
    }
}
