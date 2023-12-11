<?php

if ($_POST['action'] == 'add'){                //jika mode "add"
    $id = $_POST['ID_SEWA'];
    $nama = isset($_POST['KODE_KONSOL']) ? $_POST['KODE_KONSOL'] : '';
    // $harga = isset($_POST['KODE_DIVISI']) ? $_POST['KODE_DIVISI'] : '';
    // $harga = 

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    
    $query = "SELECT HARGA FROM tb_barang WHERE KODE_KONSOL = '$nama'";
    $result = $mysqli->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $harga = $row['HARGA'];

        $query_insert = "INSERT INTO tb_penyewaan_detail VALUES ('" . $nama . "', '" . $harga . "', 'Masih Disewa', '" . $id . "')";
        $result_insert = $mysqli->query($query_insert);

        if (!$result_insert) {
            die("Error: " . $mysqli->error);
        }
    } else {
        die("Error: " . $mysqli->error);
    }
    
    // echo $query;
    // $result = $mysqli->query($query);
    
    // if (!$result) {
    //     die("Error: " . $mysqli->error);
    // }

    // $mysqli->query($query);

    // $mysqli->query($query);
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
    $id = $_POST['NIP'];

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "DELETE FROM tb_pegawai WHERE NIP ='" . $id . "';";
    
    $result = $mysqli->query($query);
}

header('Location: index.php?page=pesanan');
exit();
?>