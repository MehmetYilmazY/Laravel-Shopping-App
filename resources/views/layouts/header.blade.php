    
        <style>
/* Navbar Style */
        .navbar-custom {
            background-color: #343a40;
            text-align: center;
            font-weight: bold;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06);
        }

        .navbar-custom a {
            color: white;
            transition: color 0.3s ease-in-out;
        }

        .navbar-custom a:hover {
            color: #17a2b8;
        }

        .navbar-custom .navbar-toggler-icon {
            background-color: white;
        }

        .navbar-custom .navbar-toggler {
            border-color: white;
        }

        .navbar-custom .navbar-toggler:hover {
            background-color: #17a2b8;
        }

        /* Center Logo */
        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Center Dropdown Menu */
        .navbar-nav {
            margin: 0 auto;
        }

        /* Bold Dropdown Menu */
        .navbar-nav .nav-link {
            font-weight: bold;
        }
    </style>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">SneaksVibe</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Anasayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="/hakkimizda">Hakkımızda</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ürünler</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/tum-urunler">Tüm ürünler</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="/populer-urunler">Popüler Ürünler</a></li>
                                <li><a class="dropdown-item" href="/yeni-urunler">Yeni Düşenler</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                     <a class="dropdown-item" href="/sepet">Sepet</a>
                    </form>
                </div>
            </div>
        </nav>

        