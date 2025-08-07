<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
    <style>
        table { width: 70%; border-collapse: collapse; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
        form { display: inline; }
        .btn { padding: 5px 10px; margin: 2px; }
    </style>
</head>
<body>
    <h2 align="center">🛒 Keranjang Belanja</h2>

    @if(session('success'))
        <p style="color: green; text-align: center;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0; @endphp
            @foreach($cart as $id => $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                    <td>
                        <form method="POST" action="{{ route('cart.update') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 50px;">
                            <button class="btn" type="submit">Simpan</button>
                        </form>
                    </td>
                    <td>Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                    <td>
                        <form method="POST" action="{{ route('cart.delete') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <button class="btn" type="submit" onclick="return confirm('Hapus produk ini?')">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
                @php $total += $item['price'] * $item['quantity']; @endphp
            @endforeach
            <tr>
                <td colspan="3"><strong>Total</strong></td>
                <td colspan="2"><strong>Rp{{ number_format($total, 0, ',', '.') }}</strong></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
