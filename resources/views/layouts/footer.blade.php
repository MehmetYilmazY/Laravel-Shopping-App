    <style>
        footer {
            position: fixed;
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 50px;
            padding: 15px;
            background-color: #343a40;
            color: white;
        }

        #floating-text {
            position: fixed;
            top: 0;
            left: 80%;
            transform: translateX(-50%);
            padding: 10px;
            background-color: #6610f2;
            color: white;
            animation: floatText 3s infinite;
        }

        @keyframes floatText {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>

<body>

    <!-- Floating Text -->
    <div id="floating-text">Kampanyalar için takipte kalın</div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">SneaksVibe | Copyright &copy; {{date("Y")}}</p>
        </div>
    </footer>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>