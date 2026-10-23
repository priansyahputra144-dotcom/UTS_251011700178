<?php

namespace App\Http\Controllers;

use App\Models\Electronic;
use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search', '');
        $category = $request->query('category', '');

        $query = Electronic::query();

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('brand', 'like', "%{$search}%")
                  ->orWhere('specs', 'like', "%{$search}%");
            });
        }

        if ($category !== '') {
            $query->where('category', $category);
        }

        $electronics = $query->orderBy('name')->get();

        $categories = Electronic::query()
            ->select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('electronics.index', compact(
            'electronics',
            'categories',
            'search',
            'category'
        ));
    }

    public function show(Electronic $electronic)
    {
        return view('electronics.show', compact('electronic'));
    }
}
