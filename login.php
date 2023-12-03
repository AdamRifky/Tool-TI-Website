<?php
session_start();
require "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AyoMain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

    <section class="container-fluid">
        <section class="row d-flex justify-content-center">
            <section class="col-12 col-sm-6 col-md-4 shadow">
                <form class="form-container" action="" method="post">
                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <img src="gambar/ayomain-logo-png.png" alt="" width="50" height="50">
                        </div>
                        <h4 class="text-center font-weight-bold">Login</h4>
                        <label for="Inputuser1">Username</label>
                        <input type="text" class="form-control" name="username" id="Inputuser1" aria-describeby="usernameHelp" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id=" InputPassword1" placeholder="Masukkan Password">
                    </div>
                    <button type="submit" class="btn btn-success btn-block mt-3 mb-3 form-control" name="tombolLogin">Sign in</button>
                </form>
            </section>
        </section>
    </section>

    <div>
        <?php
        if (isset($_POST['tombolLogin'])) {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            $query = mysqli_query($koneksi, "SELECT * FROM tb_pegawai WHERE NAMA_PEGAWAI='$username'");
            $hitungData = mysqli_num_rows($query);
            $data = mysqli_fetch_array($query);

            if ($hitungData > 0) {
                if (password_verify($password, $data['NIP'])) {
                    echo "babo";
                } else {
                    echo "babI";
                }
            } else {
        ?>
                <div class="alert alert-warning" role="alert">
                    Akun Tidak Tersedia !
                </div>
        <?php
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>