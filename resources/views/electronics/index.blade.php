@extends('layouts.app')

@section('title', 'TechStore | Katalog Produk')

@section('content')

<div class="hero mb-5">
    <h1 class="fw-bold">Selamat Datang di TechStore</h1>
    <p class="lead mb-3">
        Temukan laptop, smartphone, audio, dan aksesori teknologi pilihan.
    </p>
    <a href="#produk" class="btn btn-light fw-semibold">Lihat Produk</a>
</div>

<div id="produk" class="mb-4">
    <h2 class="fw-bold mb-1">Katalog Produk</h2>
    <p class="text-secondary">Cari perangkat elektronik sesuai kebutuhanmu.</p>
</div>

<form action="{{ route('electronics.index') }}" method="GET" class="card border-0 shadow-sm p-3 mb-4">
    <div class="row g-3">
        <div class="col-md-7">
            <label for="search" class="form-label fw-semibold">Cari Produk</label>
            <input
                type="text"
                id="search"
                name="search"
                class="form-control"
                placeholder="Masukkan nama, merek, atau spesifikasi..."
                value="{{ $search }}"
            >
        </div>

        <div class="col-md-3">
            <label for="category" class="form-label fw-semibold">Kategori</label>
            <select id="category" name="category" class="form-select">
                <option value="">Semua Kategori</option>
                @foreach ($categories as $item)
                    <option value="{{ $item }}" @selected($category === $item)>
                        {{ $item }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2 d-flex align-items-end gap-2">
            <button type="submit" class="btn btn-primary flex-grow-1">
                Cari
            </button>
            <a href="{{ route('electronics.index') }}" class="btn btn-outline-secondary">
                Reset
            </a>
        </div>
    </div>
</form>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Daftar Produk</h5>
    <span class="badge text-bg-primary fs-6">
        {{ $electronics->count() }} Produk
    </span>
</div>

<div class="row g-4">
    @forelse ($electronics as $electronic)
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card product-card shadow-sm">
                <img
                    src="{{ asset('assets/images/' . $electronic->image) }}"
                    class="product-image"
                    alt="{{ $electronic->name }}"
                >

                <div class="card-body d-flex flex-column">
                    <span class="badge text-bg-light border align-self-start mb-2">
                        {{ $electronic->category }}
                    </span>

                    <h5 class="card-title fw-bold">{{ $electronic->name }}</h5>

                    <p class="text-secondary small mb-2">
                        Merek: {{ $electronic->brand }}
                    </p>

                    <p class="card-text text-secondary small">
                        {{ $electronic->specs }}
                    </p>

                    <div class="price mt-auto mb-3">
                        Rp {{ number_format($electronic->price, 0, ',', '.') }}
                    </div>

                    <a href="{{ route('electronics.show', $electronic) }}"
                       class="btn btn-primary w-100">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-warning">
                Produk tidak ditemukan. Coba kata kunci atau kategori lain.
            </div>
        </div>
    @endforelse
</div>

@endsection
