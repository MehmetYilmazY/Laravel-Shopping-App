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
                <div class="card-header">{{ __('Materyal Ekle') }}</div>

                <div class="card-body">
                    <form action="{{ route('materials.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Materyal Türü:</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Materyal Türü Ekle</button>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
