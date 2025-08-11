@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<h1>Checkout</h1>
<p>Silakan lengkapi data Anda untuk melanjutkan pembayaran.</p>
<form>
    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" placeholder="Nama Anda">
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <textarea class="form-control" placeholder="Alamat Lengkap"></textarea>
    </div>
    <div class="mb-3">
        <label>Metode Pembayaran</label>
        <select class="form-control">
            <option>Transfer Bank</option>
            <option>COD</option>
        </select>
    </div>
    <button class="btn btn-primary">Proses Pesanan</button>
</form>
@endsection
