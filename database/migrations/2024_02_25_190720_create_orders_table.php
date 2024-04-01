<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('product_details');
            $table->string('amount_details');
            $table->integer('total');
            $table->string('address')->nullable();
            $table->enum('status', ['Menunggu Pembayaran', 'Menunggu Konfirmasi Pembayaran', 'Menunggu Konfirmasi Admin', 'Diproses', 'Dikirim', 'Selesai', 'Dibatalkan'])->default('Menunggu Pembayaran');
            $table->enum('payment_method', ['BCA', 'BNI', 'BRI', 'OVO', 'GOPAY', 'DANA', 'ShopeePay', 'COD'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
