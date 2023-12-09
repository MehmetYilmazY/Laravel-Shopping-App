<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SneaksVibe - Hakkımızda</title>
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

    <header style="background-color: #6610f2;" class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Hakkımızda</h1>
                <p class="lead fw-normal text-white-50 mb-0"> "SneakVibe."</p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="py-5">
            <h2 class="display-5 fw-bold">Bir Giyim Markası</h2>
            <p class="lead">SneakVibe, moda dünyasında öncü bir giyim markasıdır. Sunduğumuz ürünlerle tarzınızı
                ifade etmenize yardımcı oluyoruz. Kaliteli malzemeler, şık tasarımlar ve rahatlık, SneakVibe'nin
                temel prensipleridir.</p>
            <!-- İlgili diğer metinler veya görseller buraya eklenebilir -->
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>
