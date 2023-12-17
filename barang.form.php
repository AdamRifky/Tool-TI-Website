
<?php
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");

    $action=$_GET['action'];
    $kode = "";
    $merk = "";
    $nama = "";
    $harga = "";
    $stok = "";
    $jumlah = "";

      if ($_GET['action']=="add"){
        $result = $mysqli->query("SELECT MAX(SUBSTRING(KODE_KONSOL, 9)) AS currentid FROM tb_barang;");

        if (!$result) {
          die("Error: " . $mysqli->error);
        }
        
        $row = $result->fetch_assoc(); //khusus single result
        $max_number = (int)$row['currentid'];
        $new_number = $max_number + 1;
        
        $kode= sprintf("KNL-000-%02d", $new_number); //tambahkan dengan 1 untuk id baru
        $merk = "";
        $nama = "";
        $harga = "";
        $stok = "";
        $jumlah = "";
      }
      else if ($_GET['action']=="edit"){
        $currentid = $_GET['KODE_KONSOL'];
        $query = "SELECT * FROM tb_barang WHERE KODE_KONSOL = '".$kode."';";
        
        //print_r($query);
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc(); //khusus single result
        
        //print_r($row);
        $merk = $row['ID_MERK'];
        $nama = $row['NAMA_KONSOL'];
        $harga = $row['HARGA'];
        $stok = $row['STOK'];
        $jumlah = $row['JUMLAH'];

      }
    
  ?>
  <div class="col" style="padding-top: 20px;">
  <form action="barang.action.php" method="POST">
    <div class="mb-3">
      <label for="id" class="form-label">KODE KONSOL</label>
      <input type="text" class="form-control" name="KODE_KONSOL" id="KODE_KONSOL" placeholder="KODE_KONSOL" value="<?php echo $kode;?>">
    </div>
    <div class="form-group">
      <label for="alamat" class="form-label">MERK</label>
      <select class="form-control" name="ID_MERK" id="MERK" placeholder="Pilih divisi di sini">

        <?php
          $query = "SELECT ID_MERK, NAMA_MERK FROM tb_merk ORDER BY ID_MERK";
          $sqlnamasup = mysqli_query ($mysqli, $query);
          while($hasil = mysqli_fetch_array($sqlnamasup)) {
            $selected = ($hasil['ID_MERK'] == $alamat) ? "selected" : "";
            echo "<option value='" . $hasil['ID_MERK'] . "' $selected>" . $hasil['NAMA_MERK'] . "</option>";
          }
        ?>
      </select>
    </div>
    <div class="mb-3">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Konsol</label>
      <input type="text" class="form-control" name="NAMA_KONSOL" id="nama" placeholder="Tuliskan nama konsol di sini" value="<?php echo $nama;?>">
    </div>
    <div class="mb-3">
    <div class="mb-3">
      <label for="nama" class="form-label">harga</label>
      <input type="text" class="form-control" name="HARGA" id="harga" placeholder="Tuliskan harga di sini" value="<?php echo $harga;?>">
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Stok</label>
      <input type="text" class="form-control" name="STOK" id="stok" placeholder="Tuliskan stok di sini" value="<?php echo $stok;?>">
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Jumlah</label>
      <input type="text" class="form-control" name="JUMLAH" id="jumlah" placeholder="Tuliskan jumlah di sini" value="<?php echo $jumlah;?>">
    </div>
    <input type="hidden" name="action" value="<?php echo $action;?>">
    <div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
  </form>
	</div>
