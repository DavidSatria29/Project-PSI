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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('order_id')->constrained('orders');
            $table->string('product_id', 8)->nullable();
            $table->string('custom_product_id', 8)->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('custom_product_id')->references('id')->on('custom_products')->onDelete('cascade');
            $table->string('product_name');
            $table->integer('price');
            $table->integer('amount');
            $table->integer('total');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
