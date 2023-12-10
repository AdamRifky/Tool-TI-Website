<?php
session_start();
require "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - AyoMain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <section class="container-fluid">
        <section class="d-flex align-items-center justify-content-center vh-100">
            <section class="col-12 col-sm-6 col-md-4 shadow">
                <form class="form-container p-3" action="" method="post">
                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <img src="gambar/ayomain-logo-png.png" alt="" width="50" height="50">
                        </div>
                        <h4 class="text-center font-weight-bold">Sign up</h4>
                        <label for="Inputuser1">Username</label>
                        <input type="text" class="form-control" name="username" id="Inputuser1" aria-describeby="usernameHelp" placeholder="Masukkan Username" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id=" InputPassword1" placeholder="Masukkan Password" required>
                    </div>
                    <div class="form-group">
                        <label for="InputTelepon">Nomor Telepon</label>
                        <input type="text" class="form-control" name="telepon" id=" InputTelepon" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="InputRumah">Alamat Rumah</label>
                        <input type="text" class="form-control" name="rumah" id=" InputRumah" placeholder="Masukkan Alamat Rumah" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block mt-3 mb-3 form-control" name="tombolSignup">Sign up</button>
                    <div class="form-group">
                        <p class="text-center">Sudah memiliki akun? <a href="login.php" style="color: red;">Masuk</a></p>
                    </div>

                    <hr class="line" />

                    <div class="form-group">
                        <button type="button" class="btn btn-secondary btn-block mt-3 mb-3 form-control" onclick="window.location.href='home.php'">
                            Masuk Sebagai Guest
                        </button>
                    </div>
                </form>

                <?php

                if (isset($_POST['tombolSignup'])) {

                    // Mendapatkan data dari form
                    $username = $koneksi->real_escape_string($_POST['username']);
                    $password = $koneksi->real_escape_string($_POST['password']);
                    $telepon = $koneksi->real_escape_string($_POST['telepon']);
                    $rumah = $koneksi->real_escape_string($_POST['rumah']);

                    // Query SQL untuk memasukkan data pengguna baru
                    $sql = "INSERT INTO tb_pelanggan (NAMA_PELANGGAN, ALAMAT, NOMOR_TELEPON, PASSWORD) VALUES (?, ?, ?, ?)";

                    // Mempersiapkan dan mengeksekusi pernyataan
                    $stmt = $koneksi->prepare($sql);
                    $stmt->bind_param("ssis", $username, $rumah, $telepon, $password);
                    $stmt->execute();

                    if ($stmt->error) {
                ?>
                        <div class="alert alert-warning text-center" role="alert">
                            Masukkan Data Yang Benar!
                        </div>
                    <?php
                    } else {
                        // Mengatur $_SESSION untuk semua kolom
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;
                    ?><div class="alert alert-success text-center mx-3 mb-3" role="alert">
                            Data Berhasil Ditambahkan!
                        </div><?php
                            }

                            $stmt->close();
                            $koneksi->close();
                        }
                                ?>
            </section>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>