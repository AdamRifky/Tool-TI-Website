<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Syarat & Ketentuan - AyoMain</title>
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
            height: 250px;
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
                                <a class="nav-link active" href="syarat&ketentuan.php">SYARAT & KETENTUAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="produk.php">PRODUK</a>
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

    <!-- syarat & ketentuan -->

    <section>
        <div class="p-5 mb-2 bg-danger text-white fs-2 fw-bold" style="text-align: center;">
            SYARAT & KETENTUAN
        </div>
        <div class="container p-5">
            <div class="row">
                <div class="col-8">
                    <P class="fw-bold">KEBIJAKAN PENYEWAAN :</P>
                    <ul>
                        <li>Durasi penyewaan 1 hari terhitung 24jam.</li>
                        <li>Syarat penyewaan wajib mengisi formulir login lengkap.</li>
                        <li>Calon penyewa membayar lunas harga sewa konsol pada saat pengambilan.</li>
                        <li>Penyewa wajib konfirmasi melalui WA jika ingin melakukan perpanjang sewa dan pembayaran by transfer.</li>
                        <li>Jika penyewa terlambat mengembalikan dari waktu yg telah ditentukan dikenakan biaya tambahan/denda.</li>
                        <li>Booking wajib DP 50% harga produk.</li>
                        <li>Segala bentuk kerusakan dan kehilangan menjadi tanggung jawab penyewa selama penyewaan.</li>
                    </ul>
                    <P class="fw-bold">HARGA SEWA SUDAH TERMASUK :</P>
                    <ul>
                        <li>Konsol.</li>
                        <li>Kontroler.</li>
                        <li>Game.</li>
                    </ul>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center flex-column">
                    <img src="gambar/ayomain-logo-png.png" alt="" style="width: 150px;">
                    <p class="text-center">Masih bingung dengan persyaratan sewa konsol? silahkan klik tombol dibawah:</p>
                    <a href="https://api.whatsapp.com/send/?phone=6281237370501&text&type=phone_number&app_absent=0" target="_blank" class="text-decoration-none"><img src="gambar/Whatsapp-logo.png" alt="Whatsapp Icon" width="30" height="30">081237370501</a>
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