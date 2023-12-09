<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="{{ $products->product_image }}" alt="Product Image" />
            </div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder mt-5">{{ $products->product_name }}</h1>
                <div class="fs-5 mb-5">
                    <h3>₺{{ $products->product_price }}</h3>
                </div>
                <div class="fs-5 mb-5">
                    <h5>Stoktaki ürün sayısı:</h5> <h5>{{ $products->product_quantity }}</h5>
                </div>
                <p class="lead">{{ $products->product_desc  }}</p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                <button class="btn btn-outline-dark flex-shrink-0" type="button" id="addToCartBtn"
                        data-id="{{ $products->id }}">
                    <i class="bi-cart-fill me-1"></i>
                    Sepete Ekle
                </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
$(document).ready(function () {
    $('#addToCartBtn').on('click', function () {
        var productId = $(this).data('id');
        var quantity = $('#inputQuantity').val();

        $.ajax({
            method: 'POST',
            url: '/sepet',
            data: {
                productId: productId,
                quantity: quantity,
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                alert('Ürün sepete eklendi!');
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText); // Hata detaylarını konsola yazdır
                alert('Ürün eklenirken bir hata oluştu!');
            }
        });
    });
});

function updateQuantity(productId, inputElement) {
    var quantity = inputElement.value;
    var price = parseFloat(document.getElementById('totalPrice_' + productId).innerText.slice(1));
    var stock = parseFloat(document.getElementById('stock_' + productId).innerText);

    // Stoğu kontrol et
    if (quantity > stock) {
        alert('Stokta yeterli ürün yok.');
        // Eğer miktarı düzeltmek istiyorsanız:
        inputElement.value = stock;
        quantity = stock;
    }

    // Diğer güncelleme işlemleri...
}


</script>
