<?php
require "koneksi.php";

// query data stok
$data_stok = mysqli_query($koneksi, "SELECT SUM(Stok) AS total_stok FROM tb_barang");
$data_jumlah = mysqli_query($koneksi, "SELECT SUM(JUMLAH) AS total_jumlah FROM tb_barang");

// mengambil data stok
$d = mysqli_fetch_assoc($data_stok);
$j = mysqli_fetch_assoc($data_jumlah);

// menyimpan total stok ke variabel
$total_stok = $d['total_stok'];
$total_jumlah = $j['total_jumlah'];
?>

<h3>
    <p style="text-align: center;">DASHBOARD</p>
</h3>
<hr>

<div class="row text-white">
    <div class="col-3">
        <div class="card bg-info">
            <div class="card-body">
                <h5 class="card-title">JUMLAH STOK</h5>
                <div class="fs-5" style="text-align: center;">
                    <?php
                    echo "$total_stok"
                    ?>
                </div>
                <a class="card-text text-decoration-none text-dark" href="index.php?page=barang">Lihat Detail >></a>
            </div>
        </div>
    </div>
</div>
<div class="row text-white mt-5">
    <div class="col-3">
        <div class="card bg-info">
            <div class="card-body">
                <h5 class="card-title">JUMLAH BARANG</h5>
                <div class="fs-5" style="text-align: center;">
                    <?php
                    echo "$total_jumlah"
                    ?>
                </div>
                <a class="card-text text-decoration-none text-dark" href="index.php?page=barang">Lihat Detail >></a>
            </div>
        </div>
    </div>
</div>