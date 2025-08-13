<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // relasi ke user
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // relasi ke kategori (optional, biasanya kategori ikut di products)
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            // jumlah produk dalam pesanan
            $table->integer('quantity');

            // total harga pesanan
            $table->decimal('total', 15, 2);

            // status pesanan
            $table->string('status')->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
