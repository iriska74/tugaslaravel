<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        .product {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            width: 250px;
            float: left;
        }
        .container {
            width: 90%;
            margin: auto;
        }
        .button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🛍️ Daftar Produk</h2>

        <!-- Produk A -->
        <div class="product">
            <h3>Produk A</h3>
            <p>Harga: Rp100.000</p>
            <form method="POST" action="{{ route('cart.add') }}">
                @csrf
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="name" value="Produk A">
                <input type="hidden" name="price" value="100000">
                <button type="submit" class="button">Tambah ke Keranjang</button>
            </form>
        </div>

        <!-- Produk B -->
        <div class="product">
            <h3>Produk B</h3>
            <p>Harga: Rp200.000</p>
            <form method="POST" action="{{ route('cart.add') }}">
                @csrf
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="name" value="Produk B">
                <input type="hidden" name="price" value="200000">
                <button type="submit" class="button">Tambah ke Keranjang</button>
            </form>
        </div>

        <!-- Link ke keranjang -->
        <div style="clear: both; margin-top: 40px;">
            <a href="{{ route('cart.index') }}">🔍 Lihat Keranjang Belanja</a>
        </div>
    </div>
</body>
</html>
