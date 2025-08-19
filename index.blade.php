@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Daftar Produk</h1>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="card mb-4 shadow-sm h-100">

                    {{-- ✅ Gambar produk tampil dan rapi --}}
                    <div class="d-flex justify-content-center align-items-center" style="height: 200px; overflow: hidden;">
                        <img src="{{ asset($product->image_url) }}" 
                             alt="{{ $product->name }}" 
                             style="max-height: 100%; max-width: 100%; object-fit: contain;">
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">{{ $product->name }}</h5>
                        <p class="card-text text-muted small">{{ $product->description }}</p>
                        <p class="text-center"><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>

                        {{-- Tombol tambah ke keranjang --}}
                        <form action="{{ route('cart.add') }}" method="POST" class="mt-auto">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-primary w-100">Tambah ke Keranjang</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- ✅ Pagination di tengah --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection
