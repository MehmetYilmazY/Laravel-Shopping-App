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
            $table->id();
            $table->timestamps();
            $table->string('product_name');
            $table->string('product_desc');
            $table->string('product_price');
            $table->string('product_image');
            $table->string('product_category');
            $table->string('product_quantity');
            $table->string('product_brand');
            $table->string('product_color');
            $table->string('product_size');
            $table->string('product_material');
            $table->string('product_origin');
            $table->string('product_type');
            $table->string('product_status');
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
