
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TechStore')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
            color: #17243b;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            background: #10213d;
        }

        .navbar-brand {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #dce8ff;
        }

        .hero {
            background: linear-gradient(135deg, #10213d, #2458a6);
            color: white;
            padding: 55px 30px;
            border-radius: 18px;
        }

        .product-card {
            height: 100%;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform .2s, box-shadow .2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(16, 33, 61, .12);
        }

        .product-image {
            height: 210px;
            width: 100%;
            object-fit: contain;
            padding: 20px;
            background: #fff;
        }

        .price {
            color: #1759b4;
            font-size: 19px;
            font-weight: bold;
        }

        footer {
            background: #10213d;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
       
<div class="d-flex justify-content-between align-items-center w-100 flex-wrap gap-3">
    <div>
        <a class="navbar-brand text-decoration-none"
           href="{{ route('electronics.index') }}">
            TechStore
        </a>
        <div class="text-white-50 small">Toko Elektronik Modern</div>
    </div>

    <div class="d-flex gap-2 flex-wrap">
    <a href="{{ route('electronics.index') }}"
       class="btn btn-outline-light btn-sm">
        Katalog
    </a>

    <a href="{{ route('tentang-kami') }}"
       class="btn btn-outline-light btn-sm">
        Tentang Kami
    </a>

    <a href="{{ route('admin.electronics.index') }}"
       class="btn btn-light btn-sm fw-semibold">
        Admin Produk
    </a>
</div>
</div>

    </div>
</nav>

<main class="container py-4">
    @yield('content')
</main>

<footer class="py-4 mt-5 text-center">
    <div class="container">
        <p class="mb-1 fw-bold">TechStore</p>
        <small>Temukan teknologi yang sesuai dengan kebutuhanmu.</small>
    </div>
</footer>

</body>
</html>
