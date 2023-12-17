<?php

if ($_POST['action'] == 'add'){                //jika mode "add"
    $id = $_POST['ID_PELANGGAN'];
    $nama = isset($_POST['NAMA_PELANGGAN']) ? $_POST['NAMA_PELANGGAN'] : '';
    $alamat = isset($_POST['ALAMAT']) ? $_POST['ALAMAT'] : '';
    $tlp = isset($_POST['NOMOR_TELEPON']) ? $_POST['NOMOR_TELEPON'] : '';
    $password = isset($_POST['PASSWORD']) ? $_POST['PASSWORD'] : '';
    $epassword = password_hash($password, PASSWORD_DEFAULT);

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query="INSERT INTO tb_pelanggan VALUES('" . $id . "', '" . $nama . "', '" . $alamat . "', '" . $tlp . "', '" . $epassword . "');";
    
    echo $query;
    $result = $mysqli->query($query);
    
    if (!$result) {
        die("Error: " . $mysqli->error);
    }

    // $mysqli->query($query);

}
else if ($_POST['action'] == 'edit'){
    $id = $_POST['ID_PELANGGAN'];
    $nama = isset($_POST['NAMA_PELANGGAN']) ? $_POST['NAMA_PELANGGAN'] : '';
    $alamat = isset($_POST['ALAMAT']) ? $_POST['ALAMAT'] : '';
    $tlp = isset($_POST['NOMOR_TELEPON']) ? $_POST['NOMOR_TELEPON'] : '';
    $password = isset($_POST['PASSWORD']) ? $_POST['PASSWORD'] : '';
    $epassword = password_hash($password, PASSWORD_DEFAULT);
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "UPDATE tb_pelanggan SET NAMA_PELANGGAN='" . $nama . "', ALAMAT='" . $alamat . "',NOMOR_TELEPON='" . $tlp . "',PASSWORD='" . $epassword . "'WHERE ID_PELANGGAN='" . $id . "';";
    
    $result = $mysqli->query($query);
}
else if ($_POST['action'] == 'delete'){
    $id = $_POST['ID_PELANGGAN'];

    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $query = "DELETE FROM tb_pelanggan WHERE ID_PELANGGAN ='" . $id . "';";
    
    $result = $mysqli->query($query);
}

header('Location: index.php?page=pelanggan');
exit();
?>