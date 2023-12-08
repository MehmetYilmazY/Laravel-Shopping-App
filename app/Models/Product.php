<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['product_name', 'product_desc', 'product_price', 'product_image', 'product_category', 'product_quantity', 'product_brand', 'product_color', 'product_size', 'product_material', 'product_origin', 'product_type', 'product_status'];
    use HasFactory;
}
