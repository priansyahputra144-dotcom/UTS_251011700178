@extends('layouts.app')

@section('title', 'Tentang Kami | TechStore')

@section('content')

<div class="hero mb-4">
    <div class="container">
        <span class="badge bg-light text-primary mb-3">
            Tentang TechStore
        </span>

        <h1 class="fw-bold display-5">
            Teknologi untuk Kebutuhan Anda
        </h1>

        <p class="lead mb-0">
            Temukan perangkat elektronik yang mendukung aktivitas,
            produktivitas, dan gaya hidup modern Anda.
        </p>
    </div>
</div>

<div class="row g-4 align-items-center mb-5">
    <div class="col-lg-6">
        <h2 class="fw-bold mb-3">Siapa Kami?</h2>

        <p class="text-secondary">
            TechStore adalah toko elektronik yang menyediakan berbagai
            pilihan produk teknologi, mulai dari laptop, smartphone,
            perangkat audio, wearable, hingga aksesori komputer.
        </p>

        <p class="text-secondary">
            Kami hadir untuk membantu pelanggan menemukan perangkat
            yang sesuai dengan kebutuhan dan anggaran mereka melalui
            informasi produk yang jelas dan tampilan katalog yang mudah
            digunakan.
        </p>
    </div>

    <div class="col-lg-6">
        <div class="card border-0 shadow-sm p-4">
            <h3 class="fw-bold mb-3">Mengapa Memilih TechStore?</h3>

            <div class="d-flex gap-3 mb-3">
                <div class="fs-3">✓</div>
                <div>
                    <h5 class="fw-bold mb-1">Pilihan Produk</h5>
                    <p class="text-secondary mb-0">
                        Beragam kategori elektronik dalam satu katalog.
                    </p>
                </div>
            </div>

            <div class="d-flex gap-3 mb-3">
                <div class="fs-3">✓</div>
                <div>
                    <h5 class="fw-bold mb-1">Informasi Jelas</h5>
                    <p class="text-secondary mb-0">
                        Spesifikasi dan harga produk ditampilkan dengan rapi.
                    </p>
                </div>
            </div>

            <div class="d-flex gap-3">
                <div class="fs-3">✓</div>
                <div>
                    <h5 class="fw-bold mb-1">Mudah Digunakan</h5>
                    <p class="text-secondary mb-0">
                        Katalog dirancang agar nyaman diakses melalui
                        komputer maupun ponsel.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 text-center mb-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 p-4">
            <h4 class="fw-bold">Visi</h4>
            <p class="text-secondary mb-0">
                Menjadi pilihan toko elektronik yang informatif,
                modern, dan mudah diakses.
            </p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 p-4">
            <h4 class="fw-bold">Misi</h4>
            <p class="text-secondary mb-0">
                Menyediakan katalog produk dengan informasi yang jelas
                dan pengalaman penggunaan yang nyaman.
            </p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 p-4">
            <h4 class="fw-bold">Komitmen</h4>
            <p class="text-secondary mb-0">
                Mengutamakan kemudahan pelanggan dalam mengenal
                dan membandingkan produk teknologi.
            </p>
        </div>
    </div>
</div>

<div class="text-center py-4">
    <h3 class="fw-bold mb-3">Jelajahi Produk Kami</h3>

    <p class="text-secondary">
        Temukan perangkat elektronik yang sesuai dengan kebutuhan Anda.
    </p>

    <a href="{{ route('electronics.index') }}"
       class="btn btn-primary px-4">
        Lihat Katalog Produk
    </a>
</div>

@endsection