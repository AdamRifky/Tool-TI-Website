<?php

$mysqli = new mysqli("localhost", "root", "", "ayo_main");

$action = $_GET['action'];
$currentid = "";
$nama = "";
$alamat = "";
$tlp = "";
$password = "";

if ($_GET['action'] == "add") {
    $result = $mysqli->query("SELECT MAX(SUBSTRING(ID_PELANGGAN, 9)) AS currentid FROM tb_pelanggan;");

    if (!$result) {
        die("Error: " . $mysqli->error);
    }

    $row = $result->fetch_assoc(); //khusus single result
    $max_number = (int)$row['currentid'];
    $new_number = $max_number + 1;

    $currentid = sprintf("PLG-000-%02d", $new_number); //tambahkan dengan 1 untuk id baru
    $nama = "";
    $alamat = "";
    $tlp = "";
    $password = "";
} else if ($_GET['action'] == "edit") {
    $currentid = $_GET['ID_PELANGGAN'];
    $query = "SELECT * FROM tb_pelanggan WHERE ID_PELANGGAN = '" . $currentid . "';";

    //print_r($query);
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc(); //khusus single result

    //print_r($row);
    $nama = $row['NAMA_PELANGGAN'];
    $alamat = $row['ALAMAT'];
    $tlp = $row['NOMOR_TELEPON'];
    $password = $row['PASSWORD'];
}

?>
<div class="col" style="padding-top: 20px;">
    <form action="pelanggan.action.php" method="POST">
        <div class="mb-3">
            <label for="id" class="form-label">ID PELANGGAN</label>
            <input type="text" class="form-control" name="ID PELANGGAN" id="ID PELANGGAN" placeholder="ID_PELANGGAN" value="<?php echo $currentid; ?>">
        </div>
        <div class="mb-3">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama pelanggan</label>
                <input type="text" class="form-control" name="NAMA_PELANGGAN" id="nama" placeholder="Tuliskan nama anda di sini" value="<?php echo $nama; ?>">
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="nama" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="ALAMAT" id="alamat" placeholder="Tuliskan alamat di sini cukup nama kota aja" value="<?php echo $alamat; ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" name="NOMOR_TELEPON" id="no telepon" placeholder="Tuliskan nomor telepon anda di sini" value="<?php echo $tlp; ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">password</label>
                    <input type="text" class="form-control" name="PASSWORD" id="password" placeholder="Tuliskan password di sini" value="<?php echo $password; ?>">
                </div>
                <input type="hidden" name="action" value="<?php echo $action; ?>">
                <div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
    </form>
</div>