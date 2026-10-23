@extends('layouts.app')

@section('title', 'Admin Produk | TechStore')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold">Manajemen Produk</h2>
        <p class="text-secondary mb-0">Kelola katalog elektronik TechStore.</p>
    </div>

    <a href="{{ route('admin.electronics.create') }}" class="btn btn-primary">
        + Tambah Produk
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        Periksa kembali data yang dimasukkan.
    </div>
@endif

<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th style="width: 180px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($electronics as $electronic)
                    <tr>
                        <td>
                            <strong>{{ $electronic->name }}</strong>
                            <div class="small text-secondary">
                                {{ $electronic->brand }}
                            </div>
                        </td>
                        <td>{{ $electronic->category }}</td>
                        <td>Rp {{ number_format($electronic->price, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('admin.electronics.edit', $electronic) }}"
                               class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('admin.electronics.destroy', $electronic) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">
                            Belum ada produk.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-3">
    <a href="{{ route('electronics.index') }}" class="btn btn-outline-secondary">
        Kembali ke Katalog
    </a>
</div>
@endsection
