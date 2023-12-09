<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            
            @foreach ($products as $product)
                @php
                    $productTypes = is_array($product->product_type) ? $product->product_type : [$product->product_type];
                @endphp

                @if (in_array('Populer', $productTypes))
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ $product->product_image }}" alt="Product Image" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->product_name }}</h5>
                                    <!-- Product price-->
                                    ₺&nbsp;{{ $product->product_price  }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent ">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('products.show', ['id' => $product->id]) }}">Detaylar</a></div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>