<?php
require "koneksi.php";

if ($_POST['action'] == 'add') {                //jika mode "add"
    $sewa = isset($_POST['ID_SEWA']) ? $_POST['ID_SEWA'] : '';
    $konsol = isset($_POST['KODE_KONSOL']) ? $_POST['KODE_KONSOL'] : '';
    $status = isset($_POST['STATUS']) ? $_POST['STATUS'] : '';
    $lama = mysqli_query($koneksi, "SELECT TANGGAL_KEMBALI - TANGGAL_SEWA AS LAMA_SEWA FROM tb_penyewaan WHERE ID_SEWA = '" . $sewa . "';");
    $harga_hari = mysqli_query($koneksi, "SELECT HARGA AS HARGA_PERHARI FROM tb_barang WHERE KODE_KONSOL = '" . $konsol . "';");
    $l = mysqli_fetch_assoc($LAMA_SEWA);
    $h = mysqli_fetch_assoc($HARGA_PERHARI);
    $lama_sewa = $d['LAMA_SEWA'];
    $harga_total = $j['HARGA_PERHARI'];

    $harga = $lama_sewa * $harga_total;
    

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "INSERT INTO tb_penyewaan_detail VALUES('" . $sewa . "', '" . $konsol . "', '" . $harga . "', '" . $status . "');";

    echo $query;
    $result = $mysqli->query($query);

    if (!$result) {
        die("Error: " . $mysqli->error);
    }

    // $mysqli->query($query);

    $mysqli->query($query);
} else if ($_POST['action'] == 'edit') {
    $id = $_POST['ID_SEWA'];
    $id2 = $_post['KODE_KONSOL'];
    $sewa = isset($_POST['ID_SEWA']) ? $_POST['ID_SEWA'] : '';
    $konsol = isset($_POST['KODE_KONSOL']) ? $_POST['KODE_KONSOL'] : '';

    $lama = mysqli_query($koneksi, "SELECT TANGGAL_KEMBALI - TANGGAL_SEWA AS LAMA_SEWA FROM tb_penyewaan WHERE ID_SEWA = '" . $sewa . "';");
    $harga_hari = mysqli_query($koneksi, "SELECT HARGA AS HATGA_PERHARI FROM tb_barang WHERE KODE_KONSOL = '" . $konsol . "';");


    $harga = $lama * $harga_hari;
    $status = isset($_POST['STATUS']) ? $_POST['STATUS'] : '';
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "UPDATE tb_penyewaan_detail SET ID_SEWA='" . $sewa . "', KODE_KONSOL='" . $konsol . "', HARGA_SEWA='" . $harga . "', STATUS='" . $status . "' WHERE ID_SEWA='" . $id . " AND KODE_KONSOL='" . $id2 . " ;";

    $result = $mysqli->query($query);
} else if ($_POST['action'] == 'delete') {
    $id = $_POST['ID_SEWA'];
    $id2 = $_post['KODE_KONSOL'];

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "DELETE FROM tb_penyewaan_detail WHERE ID_SEWA ='" . $id . " AND KODE_KONSOL='" . $id2 . ";";

    $result = $mysqli->query($query);
}

header('Location: index.php?page=pesanan');
exit();
