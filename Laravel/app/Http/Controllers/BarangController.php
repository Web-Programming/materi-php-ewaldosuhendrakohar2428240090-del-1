<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $title = 'Daftar Barang';
        $products = Product::paginate(10);

        return view('product.index', compact('title', 'products'));
    }

    public function create()
    {
        return view('product.create', [
            'title' => 'Tambah Barang',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'status' => 'nullable|string|in:new,used',
            'is_active' => 'nullable|boolean',
            'release_date' => 'nullable|date',
        ]);

        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        Product::create($data);

        return redirect()->route('Produk.index')->with('success', 'Barang berhasil disimpan.');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('product.detail', [
            'title' => 'Detail Barang',
            'product' => $product,
        ]);
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', [
            'title' => 'Edit Barang',
            'product' => $product,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'status' => 'nullable|string|in:new,used',
            'is_active' => 'nullable|boolean',
            'release_date' => 'nullable|date',
        ]);

        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        $product->update($data);

        return redirect()->route('Produk.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('Produk.index')->with('success', 'Barang berhasil dihapus.');
    }
}
