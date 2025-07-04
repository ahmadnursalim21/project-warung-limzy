<html>

<head>
    <title>Warung Limzy | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>


    <footer class="bg-dark text-white pt-4 pb-2 mt-5">
        <div class="container text-center text-md-start">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Sistem pakar jurusan</h5>
                    <p>Solusi Cerdas Untuk Membantu Anda Memilih Jurusan Sesuai Minat Dan Bakat.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a href="about.php" class="text-white text-decoration-none">Tentang Kami</a></li>
                        <li><a href="contact.php" class="text-white text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Hubungi Kami</h5>
                    <p>Email: support@mywebsite.com</p>
                    <p>Telp: 0812-3456-7890</p>
                </div>
            </div>
            <hr class="border-light" />
            <div class="text-center">
                &copy; <?= date('Y') ?> MyWebsite. All rights reserved.
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
