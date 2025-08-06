<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 // Tampilkan semua produk
    public function index()
    {
        $products = Product::all(); // ambil semua data dari tabel products
        return view('products.index', compact('products'));
    }   //
}
