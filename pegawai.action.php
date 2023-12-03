<?php

if ($_GET['action']=='add'){                //jika mode "add"
    $id=$_GET['NIP'];
    $nama=$_GET['NAMA_PEGAWAI'];
    $alamat=$_GET['KODE_DIVISI'];
    $query="insert into tb_Pegawai values(".$NIP.",'".$NAMA_PEGAWAI."','".$KODE_DIVISI."');";
    //echo $query;
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $mysqli->query($query);

}
else if ($_GET['action']=='edit'){
    $id=$_GET['NIP'];
    $nama=$_GET['NAMA_PEGAWAI'];
    $alamat=$_GET['KODE_DIVISI'];
    $query="update tb_Pegawai set NAMA_PEGAWAI='".$NAMA_PEGAWAI."', KODE_DIVISI='".$KODE_DIVISI."' where NIP=".$NIP.";";
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $mysqli->query($query);
}
else if ($_GET['action']=='delete'){
    $id=$_GET['NIP'];
    $query="delete from tb_Pegawai where NIP=".$NIP.";";
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
    $mysqli->query($query);
}

header('Location: index.php?page=pegawai');
exit();
?>