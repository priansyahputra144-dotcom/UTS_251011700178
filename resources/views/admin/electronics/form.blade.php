<div class="mb-3">
    <label class="form-label">Nama Produk</label>
    <input type="text" name="name" class="form-control"
           value="{{ old('name', isset($electronic) ? $electronic->name : '') }}" required>
    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Merek</label>
    <input type="text" name="brand" class="form-control"
           value="{{ old('brand', isset($electronic) ? $electronic->brand : '') }}" required>
    @error('brand') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Spesifikasi</label>
    <textarea name="specs" class="form-control" rows="3" required>{{ old('specs', isset($electronic) ? $electronic->specs : '') }}</textarea>
    @error('specs') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Harga (Rupiah)</label>
    <input type="number" name="price" min="0" step="1" class="form-control"
           value="{{ old('price', isset($electronic) ? $electronic->price : '') }}" required>
    @error('price') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Nama File Gambar</label>
    <input type="text" name="image" class="form-control"
           placeholder="Contoh: laptop.svg"
           value="{{ old('image', isset($electronic) ? $electronic->image : '') }}" required>
    <small class="text-secondary">
        File gambar harus tersedia di public/assets/images.
    </small>
    @error('image') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Kategori</label>
    <select name="category" class="form-select" required>
        <option value="">Pilih kategori</option>
        @foreach (['Laptop', 'Smartphone', 'Audio', 'Wearable', 'Aksesori'] as $item)
            <option value="{{ $item }}"
                @selected(old('category', isset($electronic) ? $electronic->category : '') === $item)>
                {{ $item }}
            </option>
        @endforeach
    </select>
    @error('category') <div class="text-danger small">{{ $message }}</div> @enderror
</div>
