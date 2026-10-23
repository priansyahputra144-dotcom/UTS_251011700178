@extends('layouts.app')

@section('title', $electronic->name . ' | TechStore')

@section('content')

<div class="mb-4">
    <a href="{{ route('electronics.index') }}" class="btn btn-outline-primary">
        &larr; Kembali ke Katalog
    </a>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="row g-0">
        <div class="col-md-5 bg-white d-flex align-items-center justify-content-center p-4">
            <img
                src="{{ asset('assets/images/' . $electronic->image) }}"
                alt="{{ $electronic->name }}"
                class="img-fluid"
                style="max-height: 350px; object-fit: contain;"
                onerror="this.style.display='none'"
            >
        </div>

        <div class="col-md-7">
            <div class="card-body p-4 p-lg-5">
                <span class="badge text-bg-primary mb-3">
                    {{ $electronic->category }}
                </span>

                <h1 class="fw-bold">{{ $electronic->name }}</h1>

                <p class="text-secondary">
                    Merek: {{ $electronic->brand }}
                </p>

                <h3 class="text-primary fw-bold my-4">
                    Rp {{ number_format($electronic->price, 0, ',', '.') }}
                </h3>

                <h5 class="fw-bold">Spesifikasi Produk</h5>
                <p class="text-secondary">{{ $electronic->specs }}</p>

                <a href="{{ route('electronics.index') }}"
                   class="btn btn-primary mt-3">
                    Kembali Belanja
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
