<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('admin.product', compact('products'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:Aktif,Tidak Aktif',
            'image' => 'required',
        ]);


        // Upload file jika ada
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('uploads', $imageName, 'public');
            $validatedData['image'] = '/storage/' . $imagePath;
        }

        // dd($validatedData);
        Product::create($validatedData);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }

    public function destroy(Request $request, $id)
    {
        // Temukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus file gambar jika ada
        if ($product->image && Storage::exists('public/' . str_replace('/storage/', '', $product->image))) {
            Storage::delete('public/' . str_replace('/storage/', '', $product->image));
        }

        // Hapus produk dari database
        $product->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:Aktif,Tidak Aktif',
            'image' => 'nullable',
        ]);

        $product = Product::findOrFail($id);

        // Upload file jika ada
        if ($request->hasFile('image')) {
            // Hapus file gambar lama jika ada
            if ($product->image && Storage::exists('public/' . str_replace('/storage/', '', $product->image))) {
                Storage::delete('public/' . str_replace('/storage/', '', $product->image));
            }

            // Simpan file gambar baru
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('uploads', $imageName, 'public');
            $validatedData['image'] = '/storage/' . $imagePath;
        }

        $product->update($validatedData);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui!');
    }
}
