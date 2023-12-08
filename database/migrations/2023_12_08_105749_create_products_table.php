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
            $table->file('product_image')->store('products')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_quantity')->nullable();
            $table->string('product_brand')->nullable();
            $table->string('product_color')->nullable();
            $table->string('product_size')->nullable();
            $table->string('product_material')->nullable();
            $table->string('product_origin')->nullable();
            $table->string('product_type')->nullable();
            $table->string('product_status')->nullable();
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
