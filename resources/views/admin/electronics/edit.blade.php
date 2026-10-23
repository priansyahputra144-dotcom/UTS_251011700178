
@extends('layouts.app')

@section('title', 'Edit Produk | TechStore')

@section('content')
<h2 class="fw-bold mb-4">Edit Produk</h2>

<form action="{{ route('admin.electronics.update', $electronic) }}"
      method="POST" class="card border-0 shadow-sm p-4">
    @csrf
    @method('PUT')

    @include('admin.electronics.form')

    <div class="mt-4">
        <button class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('admin.electronics.index') }}"
           class="btn btn-outline-secondary">Batal</a>
    </div>
</form>
@endsection
