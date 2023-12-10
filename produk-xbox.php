<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk - AyoMain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        footer {
            background-color: #362b2b;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer-logo {
            max-width: 100px;
            margin-top: 10px;
        }

        .navbar-nav {
            font-size: 13px;
        }

        .card-title {
            text-align: center;
        }

        .card-text {
            text-align: center;
            color: #008000;
        }

        .card img {
            margin-top: 10px;
            height: 160px;
            width: 100%;
        }

        .button {
            display: inline-block;
            padding: 7px 20px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body style="background-color: #f2f2f2;">

    <!-- buat navbar -->
    <section class="bg-white navbar-light shadoe-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadoe-sm">
                <div class="container-fluid">
                    <img src="gambar/ayomain-logo-png.png" alt="" width="50" height="50">
                    <a class="navbar-brand me-4">AyoMain</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="home.php">BERANDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="syarat&ketentuan.php">SYARAT & KETENTUAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="produk.php">PRODUK</a>
                            </li>
                        </ul>
                        <?php
                        if (isset($_SESSION['username'])) {
                        ?>
                            <div class="dropdown">
                                <button class="ms-3 button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="gambar/user-logo.png" alt="user" width="25px" height="25px">
                                    <?php echo $_SESSION['username']; ?>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-white">
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                                </ul>
                            </div>
                        <?php } else {
                        ?><a href="login.php" class="ms-3 button"><img src="gambar/user-logo.png" alt="user" width="25px" height="25px">
                            <?php echo "Log in";
                        }
                            ?>
                            </a>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- buat produk -->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-2 offset-1" style="background-color: #dce0e6;">
                    <p class="fs-3 fw-bold" style="text-align: center;">Kategori</p>
                    <a href="produk.php" class="fs-6 text-decoration-none text-dark text-opacity-75">
                        <p><img src="gambar/angle-right-icon.png" alt="" width="10%" style="margin-bottom: 5px;">Semua Produk</p>
                    </a>
                    <a href="produk-playstation.php" class="fs-6 text-decoration-none text-dark text-opacity-75">
                        <p><img src="gambar/angle-right-icon.png" alt="" width="10%" style="margin-bottom: 5px;">PlayStation</p>
                    </a>
                    <a href="produk-xbox.php" class="fs-6 text-decoration-none text-dark">
                        <p><img src="gambar/angle-right-icon.png" alt="" width="10%" style="margin-bottom: 5px;">Xbox</p>
                    </a>
                    <a href="produk-nintendo.php" class="fs-6 text-decoration-none text-dark text-opacity-75">
                        <p><img src="gambar/angle-right-icon.png" alt="" width="10%" style="margin-bottom: 5px;">Nintendo</p>
                    </a>
                </div>
                <div class="col-8 px-5">
                    <p class="fs-3 fw-bold" style="text-align: center;">Xbox</p>
                    <div class="row items-center justify-content-center">
                        <div class="col-4">
                            <div class="card">
                                <img src="gambar/ps5.png" class="card-img-top" alt="PS 5">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <h5 class="card-title"><br> Xbox 360</h5>
                                    <p class="card-text">Rp. 250,000/Hari</p>
                                    <a href="#" class="btn btn-dark mt-auto bg-black form-control">ORDER</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="gambar/controller-ps5.webp" class="card-img-top" alt="PS 5">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <h5 class="card-title"><br> Xbox one</h5>
                                    <p class="card-text">Rp. 40,000/Hari</p>
                                    <a href="#" class="btn btn-dark mt-auto bg-black form-control">ORDER</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="gambar/game-fifa23.jpg" class="card-img-top" alt="PS 5">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <h5 class="card-title"><br> Xbox series X</h5>
                                    <p class="card-text">Rp. 5,000/Hari</p>
                                    <a href="#" class="btn btn-dark mt-auto bg-black form-control">ORDER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row items-center justify-content-start mt-3">
                        <div class="col-4">
                            <div class="card">
                                <img src="gambar/ps5.png" class="card-img-top" alt="PS 5">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <h5 class="card-title"><br> Xbox series S</h5>
                                    <p class="card-text">Rp. 250,000/Hari</p>
                                    <a href="#" class="btn btn-dark mt-auto bg-black form-control">ORDER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- buat footer -->
    <section class="mt-5">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Logo di kiri -->
                        <img src="gambar/ayomain-logo-png.png" alt="AyoMain Logo" class="footer-logo">
                    </div>
                    <div class="col-lg-4">
                        <!-- Tentang Kami -->
                        <h5>Tentang Kami</h5>
                        <p>AyoMain melayani jasa rental atau penyewaan konsol, aksesoris, dan game dengan syarat mudah dan harga yang bersahabat.</p>
                    </div>
                    <div class="col-lg-4">
                        <!-- Informasi Kontak -->
                        <h5>Informasi Kontak</h5>
                        <p>
                            <img src="gambar/lokasi-logo.png" alt="Lokasi Icon" width="20" height="20"> Alamat: Jl Jimbaran No.60<br>
                            <img src="gambar/telpon-logo.png" alt="Telepon Icon" width="20" height="20"> Telpon/WA: +62 123 456 7769<br>
                            <img src="gambar/mail-logo.png" alt="Email Icon" width="20" height="20"> Email: info@rentalayomain.com
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Social Media Icons dengan link -->
                        <a href="https://www.instagram.com/rentalayomain/" target="_blank"><img src="gambar/Instagram-logo.png" alt="Instagram Icon" width="30" height="30"></a>
                        <a href="https://www.facebook.com/rentalayomain/" target="_blank"><img src="gambar/Facebook-logo.png" alt="Facebook Icon" width="30" height="30"></a>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>