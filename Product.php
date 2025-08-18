<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi massal (fillable)
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
        'category_id',
    ];

    /**
     * Relasi ke Category
     * Satu produk punya satu kategori
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
