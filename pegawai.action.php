<?php

if ($_POST['action'] == 'add'){                //jika mode "add"
    $id = $_POST['NIP'];
    $nama = isset($_POST['NAMA_PEGAWAI']) ? $_POST['NAMA_PEGAWAI'] : '';
    $alamat = isset($_POST['KODE_DIVISI']) ? $_POST['KODE_DIVISI'] : '';

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query="INSERT INTO tb_pegawai VALUES('" . $id . "', '" . $nama . "', '" . $alamat . "', '');";
    
    echo $query;
    $result = $mysqli->query($query);
    
    if (!$result) {
        die("Error: " . $mysqli->error);
    }

    // $mysqli->query($query);

    $mysqli->query($query);
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

header('Location: index.php?page=pegawai');
exit();
?>