<?php

include('function.tanggal.php');

if ($_POST['action'] == 'add'){                //jika mode "add"
    $id = $_POST['ID_SEWA'];
    $nama = isset($_POST['ID_PELANGGAN']) ? $_POST['ID_PELANGGAN'] : '';
    $sewa = $_POST['sewa'];
    $tanggalSewa = inputTanggal($sewa);
    $kembali = $_POST['kembali'];
    $tanggalKembali = inputTanggal($kembali);
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");

    echo "Tanggal Sewa: " . $tanggalSewa . "<br>";
    echo "Tanggal Kembali: " . $tanggalKembali . "<br>";
    
    $query = "INSERT INTO tb_penyewaan VALUES ('" . $id . "', '" . $tanggalSewa . "', '" . $tanggalKembali . "', '" . $nama . "')";
    $result = $mysqli->query($query);

    if (!$result) {
        die("Error: " . $mysqli->error);
    }
    
    
    // echo $query;
}
else if ($_POST['action'] == 'edit'){
    $id = $_POST['NIP'];
    $nama = isset($_POST['NAMA_PEGAWAI']) ? $_POST['NAMA_PEGAWAI'] : '';
    $alamat = isset($_POST['KODE_DIVISI']) ? $_POST['KODE_DIVISI'] : '';
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "UPDATE tb_pegawai SET NAMA_PEGAWAI='" . $nama . "', KODE_DIVISI='" . $alamat . "' WHERE NIP='" . $id . "';";
    
    $result = $mysqli->query($query);
}
else if ($_POST['action'] == 'delete'){
    $id = $_POST['ID_SEWA'];

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "DELETE FROM tb_penyewaan WHERE ID_SEWA ='" . $id . "';";
    
    $result = $mysqli->query($query);
}

header('Location: index.php?page=booking');
exit();
?>