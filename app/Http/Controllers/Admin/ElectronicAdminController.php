<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Electronic;
use Illuminate\Http\Request;

class ElectronicAdminController extends Controller
{
    public function index()
    {
        $electronics = Electronic::orderBy('id', 'desc')->get();

        return view('admin.electronics.index', compact('electronics'));
    }

    public function create()
    {
        return view('admin.electronics.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'specs' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|string|max:255',
            'category' => 'required|string|max:100',
        ]);

        Electronic::create($validated);

        return redirect()->route('admin.electronics.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Electronic $electronic)
    {
        return view('admin.electronics.edit', compact('electronic'));
    }

    public function update(Request $request, Electronic $electronic)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'specs' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|string|max:255',
            'category' => 'required|string|max:100',
        ]);

        $electronic->update($validated);

        return redirect()->route('admin.electronics.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Electronic $electronic)
    {
        $electronic->delete();

        return redirect()->route('admin.electronics.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
