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
            $table->foreignId('cart_id')->constrained('carts');
            $table->decimal('total', 10, 2);
            $table->string('address');
            $table->enum('status', ['pending_payment', 'completed', 'shipped', 'delivered', 'canceled'])->default('pending_payment');
            $table->enum('payment_method', ['BCA', 'BRI', 'OVO', 'GOPAY', 'DANA', 'ShopeePay', 'COD']);
            $table->string('product_details');
            $table->string('amount_details');
            $table->timestamp('order_at')->useCurrent();
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
