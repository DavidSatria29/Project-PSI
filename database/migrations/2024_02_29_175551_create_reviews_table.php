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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            // $table->string('product_id', 8)->nullable();
            // $table->foreign('product_id')->references('id')->on('products');
            // $table->foreignId('custom_product_id')->nullable()->constrained('custom_products');
            $table->string('name');
            $table->string('product_name');
            $table->decimal('rating', 2, 1);
            $table->text('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
