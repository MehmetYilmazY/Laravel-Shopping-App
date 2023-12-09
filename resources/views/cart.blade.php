<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SneaksVibe - Sepetim</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    @include('layouts.header')

    <!-- Sepet İçeriği -->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <h1 class="display-5 fw-bolder">Sepetim</h1>

            <!-- Sepet İçeriği -->
            <div class="row gx-4 gx-lg-5 mt-4">
                <div class="col-md-8">
                    <?php
                    // $cart'ı Session'dan al
                    $cart = Session::get('cart', []);

                    // Eğer $cart null ise, varsayılan olarak boş bir dizi ata
                    $cart = is_array($cart) ? $cart : [];
                    ?>
                    @if(count($cart) > 0)
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                @foreach($cart as $productId => $item)
                                <div class="col-md-4">
                                    <img src="{{ $item['image'] }}" class="img-fluid" alt="{{ $item['name'] }}">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">{{ $item['name'] }}</h5>
                                    <p class="card-text">
                                        Fiyat: ₺{{ $item['price'] }} <br>
                                        Miktar: <input type="number" value="{{ $item['quantity'] }}" min="1" onchange="updateQuantity({{ $productId }}, this)">
                                        <br>
                                        Toplam: <span id="totalPrice_{{ $productId }}">₺{{ $item['price'] * $item['quantity'] }}</span>
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @else
                    <p class="lead">Sepetinizde hiç ürün yok.</p>
                    @endif
                </div>

                <!-- Toplam Tutar ve Ödeme -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="display-6 fw-bolder">Toplam Tutar</h2>
                            @if(count($cart) > 0)
                            <p>Toplam: <span id="grandTotal">₺{{ array_sum(array_column($cart, 'price', 'quantity')) }}</span></p>
                            <a href="#" class="btn btn-primary">Ödeme Yap</a>
                            @else
                            <p class="lead">Sepetinizde hiç ürün yok.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function updateQuantity(productId, inputElement) {
            var quantity = inputElement.value;
            var price = parseFloat(document.getElementById('totalPrice_' + productId).innerText.slice(1));
            
            // Sepetinizi güncelleyin
            // Örneğin: $.ajax, axios veya fetch kullanabilirsiniz
            // Burada sadece toplam tutarı güncelliyoruz
            var grandTotal = parseFloat(document.getElementById('grandTotal').innerText.slice(1));
            grandTotal += (quantity - 1) * price;

            // Miktarı güncelle
            document.getElementById('totalPrice_' + productId).innerText = '₺' + (price * quantity);
            // Toplam Tutarı güncelle
            document.getElementById('grandTotal').innerText = '₺' + grandTotal;
        }

        
    </script>
</body>


</html>
