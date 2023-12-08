@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Ürün Oluştur') }}</div>

                <div class="card-body">
<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th class="col-md-4">Ürün Adı:</th>
                    <td class="col-md-8"><input type="text" name="product_name" class="form-control"></td>
                </tr>
                <tr>
                    <th>Ürün Açıklaması:</th>
                    <td><input type="text" name="product_desc" class="form-control"></td>
                </tr>
                <tr>
                    <th>Ürün Fiyatı:</th>
                    <td><input type="text" name="product_price" class="form-control"></td>
                </tr>
                <tr>
                    <th>Ürün Görseli:</th>
                    <input type="text" name="product_image" class="form-control">
                </tr>
                <tr>
                    <th>Ürün Tipi:</th>
                    <td>
                    <select name="product_category" id="product_category" class="form-control">
                            @foreach($types as $type)
                                <option value="{{ $type->name }}">{{ $type->name }}</option>
                            @endforeach
                    </select>
                    </td>
                </tr>

                <tr>
                <th>Ürün Markası:</th>
                <td>
                    <select name="product_brand" id="product_brand" class="form-control">
                            @foreach($brands as $brand)
                                <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                            @endforeach
                    </select>
                </td>
                </tr>

                <tr>
                    <th>Ürün Rengi:</th>
                    <td><input type="color" name="product_color" class="form-control"></td>
                </tr>
                <tr>

                    <th>Ürün Materyali:</th>
                    <td>
                        <select name="product_material" id="product_material" class="form-control">
                            @foreach($materials as $material)
                                <option value="{{ $material->name }}">{{ $material->name }}</option>
                            @endforeach
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Stok Durumu:</th>
                    <td>
                        <select name="product_status" id="product_status" class="form-control">
                            <option value="stokvar">Stokta Var</option>
                            <option value="stokyok">Stokta Yok</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Ürün Stoğu:</th>
                    <td><input type="text" name="product_quantity" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
