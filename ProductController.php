<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // ✅ Ambil produk dengan pagination (3 per halaman)
        $products = Product::paginate(3);

        // Kirim ke view
        return view('products.index', compact('products'));

        
       
    }
}

    

