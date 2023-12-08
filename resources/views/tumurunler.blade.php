@extends('layouts.app')

@section('content')
<div class="container">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Ürün Listesi</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Ürün Açıklaması</th>
                <th>Ürün Fiyatı</th>
                <th>Ürün Görseli</th>
                <th>Ürün Stoğu</th>
                <th>Ürün Markası</th>
                <th>Ürün Rengi</th>
                <th>Ürün Materyali</th>
                <th>Ürün Durumu</th>
                <th>Düzenle</th>
                <th>Sil</th>
                <!-- Diğer sütunları ekleyin -->
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_desc }}</td>
                <td>{{ $product->product_price }}</td>
                <td>
                    @if ($product->product_image)
                        <img src="{{ $product->product_image }}" alt="Product_Image" style="max-width: 100px; max-height: 100px;">
                    @else
                        Resim Yok
                    @endif
                </td>
                <td>{{ $product->product_quantity }}</td>
                <td>{{ $product->product_brand }}</td>
                <td style="color: {{ $product->product_color }};">{{ $product->product_color }}</td>
                <td>{{ $product->product_material }}</td>
                <td>{{ $product->product_status }}</td>
                <!-- Diğer sütunları ekleyin -->
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Düzenle</a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post" onsubmit="return confirm('Emin misiniz?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
