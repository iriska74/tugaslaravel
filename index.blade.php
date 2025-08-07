<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                {{ $product->description }}<br>
                Harga: Rp {{ number_format($product->price, 0, ',', '.') }}
            </li>
        @endforeach
    </ul>
</body>
</html>
