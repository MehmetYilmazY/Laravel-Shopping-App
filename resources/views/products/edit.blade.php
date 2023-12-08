@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Ürünü Düzenle</h2>
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="product_name" class="form-label">Ürün Adı:</label>
            <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="product_desc" class="form-label">Ürün Açıklaması:</label>
            <input type="text" name="product_desc" value="{{ $product->product_desc }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="product_price" class="form-label">Ürün Fiyatı:</label>
            <input type="number" name="product_price" value="{{ $product->product_price }}" class="form-control">
        </div>

        <label for="product_image">Görsel URL:</label>
        <input type="text" name="product_image" value="{{ $product->product_image }}" class="form-control">

        <div class="mb-3">
            <label for="product_category" class="form-label">Ürün Tipi:</label>
            <select name="product_category" id="product_category" class="form-control">
                @foreach($types as $type)
                    <option value="{{ $type->name }}" {{ $type->name == $product->product_category ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="product_brand" class="form-label">Ürün Markası:</label>
            <select name="product_brand" id="product_brand" enctype="multipart/form-data" class="form-control">
                @foreach($brands as $brand)
                    <option value="{{ $brand->name }}" {{ $brand->name == $product->product_brand ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="product_color" class="form-label">Ürün Rengi:</label>
            <input type="color" name="product_color" value="{{ $product->product_color }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="product_status" class="form-label">Stok Durumu:</label>
            <select name="product_status" id="product_status" class="form-control">
                <option value="StokVar" {{ $product->product_status === 'StokVar' ? 'selected' : '' }}>Stokta Var</option>
                <option value="StokYok" {{ $product->product_status === 'StokYok' ? 'selected' : '' }}>Stokta Yok</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="product_quantity" class="form-label">Ürün Stoğu:</label>
            <input type="number" name="product_quantity" value="{{ $product->product_quantity }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
</div>
@endsection
