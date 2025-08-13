<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // relasi ke kategori
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2); // harga produk
            $table->integer('stock')->default(0); // stok produk
            $table->string('image_url')->nullable(); // gambar produk
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
