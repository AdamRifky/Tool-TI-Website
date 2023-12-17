<?php
require "koneksi.php";

// query data stok
$data_stok = mysqli_query($koneksi, "SELECT SUM(Stok) AS total_stok FROM tb_barang");
$data_jumlah = mysqli_query($koneksi, "SELECT SUM(JUMLAH) AS total_jumlah FROM tb_barang");
$data_pegawai = mysqli_query($koneksi, "SELECT count(NIP) AS Jumlah_pegawai FROM tb_pegawai");
$data_pelanggan = mysqli_query($koneksi, "SELECT count(ID_PELANGGAN) AS Jumlah_pelanggan FROM tb_pelanggan");

// mengambil data stok
$d = mysqli_fetch_assoc($data_stok);
$j = mysqli_fetch_assoc($data_jumlah);
$p = mysqli_fetch_assoc($data_pegawai);
$n = mysqli_fetch_assoc($data_pelanggan);


// menyimpan total stok ke variabel
$total_stok = $d['total_stok'];
$total_jumlah = $j['total_jumlah'];
$total_pegawai =$p['Jumlah_pegawai'];
$total_pelanggan =$n['Jumlah_pelanggan'];
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
    <div class="col-3">
        <div class="card bg-success">
            <div class="card-body">
                <h5 class="card-title">JUMLAH PEGAWAI</h5>
                <div class="fs-5" style="text-align: center;">
                    <?php
                    echo "$total_pegawai"
                    ?>
                </div>
                <a class="card-text text-decoration-none text-dark" href="index.php?page=pegawai">Lihat Detail >></a>
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
    <div class="col-3">
        <div class="card bg-success">
            <div class="card-body">
                <h5 class="card-title">JUMLAH PELANGGAN</h5>
                <div class="fs-5" style="text-align: center;">
                    <?php
                    echo "$total_pelanggan"
                    ?>
                </div>
                <a class="card-text text-decoration-none text-dark" href="index.php?page=pelanggan">Lihat Detail >></a>
            </div>
        </div>
    </div>
</div>
