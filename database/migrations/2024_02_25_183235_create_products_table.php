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
        Schema::create('products', function (Blueprint $table) {
            $table->string('id', 8)->primary();
            $table->integer('category_id')->constrained('categories');
            $table->integer('user_id')->constrained('users');
            $table->string('name');
            $table->string('type');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->integer('price');
            $table->integer('stock');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
