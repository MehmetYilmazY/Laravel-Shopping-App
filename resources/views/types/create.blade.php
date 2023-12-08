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
                <div class="card-header">{{ __('Ürün Tipi Ekle') }}</div>

                <div class="card-body">
                    <form action="{{ route('types.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Ürün Tipi:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Ürün Tipi Ekle</button>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
