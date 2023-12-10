<?php

if ($_POST['action'] == 'add'){                //jika mode "add"
    $kode = $_POST['KODE_KONSOL'];
    $merk = isset($_POST['ID_MERK']) ? $_POST['ID_MERK'] : '';
    $nama = isset($_POST['NAMA_KONSOL']) ? $_POST['NAMA_KONSOL'] : '';
    $harga = isset($_POST['HARGA']) ? $_POST['HARGA'] : '';
    $stok = isset($_POST['STOK']) ? $_POST['STOK'] : '';

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query="INSERT INTO tb_barang VALUES('" . $kode . "', '" . $merk . "', '" . $nama . "', '" . $harga . "', '" . $stok . "');";
    
    echo $query;
    $result = $mysqli->query($query);
    
    if (!$result) {
        die("Error: " . $mysqli->error);
    }

    // $mysqli->query($query);

    $mysqli->query($query);
}
else if ($_POST['action'] == 'edit'){
    $kode = $_POST['KODE_KONSOL'];
    $merk = isset($_POST['ID_MERK']) ? $_POST['ID_MERK'] : '';
    $nama = isset($_POST['NAMA_KONSOL']) ? $_POST['NAMA_KONSOL'] : '';
    $harga = isset($_POST['HARGA']) ? $_POST['HARGA'] : '';
    $stok = isset($_POST['STOK']) ? $_POST['STOK'] : '';
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "UPDATE tb_barang SET ID_MERK='" . $merk . "',NAMA_KONSOL='" . $nama . "', HARGA='" . $harga . "',STOK='" . $stok . "'WHERE KODE_KONSOL='" . $kode . "';";
    
    $result = $mysqli->query($query);
}
else if ($_POST['action'] == 'delete'){
    $kode = $_POST['KODE_KONSOL'];

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "DELETE FROM tb_barang WHERE KODE_KONSOL ='" . $kode . "';";
    
    $result = $mysqli->query($query);
}

header('Location: index.php?page=barang');
exit();
?>