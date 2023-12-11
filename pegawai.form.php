
<?php
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");

    $action=$_GET['action'];
    $currentid = "";
    $nama = "";
    $alamat = "";

      if ($_GET['action']=="add"){
        $result = $mysqli->query("SELECT MAX(SUBSTRING(NIP, 9)) AS currentid FROM tb_pegawai;");

        if (!$result) {
          die("Error: " . $mysqli->error);
        }
        
        $row = $result->fetch_assoc(); //khusus single result
        $max_number = (int)$row['currentid'];
        $new_number = $max_number + 1;
        
        $currentid = sprintf("NIP-000-%02d", $new_number); //tambahkan dengan 1 untuk id baru
        $nama = "";
        $alamat = "";
      }
      else if ($_GET['action']=="edit"){
        $currentid = $_GET['NIP'];
        $query = "SELECT * FROM tb_pegawai WHERE NIP = '".$currentid."';";
        
        //print_r($query);
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc(); //khusus single result
        
        //print_r($row);
        $nama = $row['NAMA_PEGAWAI'];
        $alamat = $row['KODE_DIVISI'];

      }
    
  ?>
  <div class="col" style="padding-top: 20px;">
  <form action="pegawai.action.php" method="POST">
    <div class="mb-3">
      <label for="id" class="form-label">NIP</label>
      <input type="text" class="form-control" name="NIP" id="NIP" placeholder="NIP" value="<?php echo $currentid;?>">
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="NAMA_PEGAWAI" id="nama" placeholder="Tuliskan nama di sini" value="<?php echo $nama;?>">
    </div>
    <div class="form-group">
      <label for="alamat" class="form-label">DIVISI</label>
      <select class="form-control" name="KODE_DIVISI" id="alamat" placeholder="Pilih divisi di sini">

        <?php
          $query = "SELECT KODE_DIVISI, NAMA_DIVISI FROM tb_divisi ORDER BY KODE_DIVISI";
          $sqlnamasup = mysqli_query ($mysqli, $query);
          while($hasil = mysqli_fetch_array($sqlnamasup)) {
            $selected = ($hasil['KODE_DIVISI'] == $alamat) ? "selected" : "";
            echo "<option value='" . $hasil['KODE_DIVISI'] . "' $selected>" . $hasil['NAMA_DIVISI'] . "</option>";
          }
        ?>
      </select>
    </div>
    <input type="hidden" name="action" value="<?php echo $action;?>">
    <div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
  </form>
	</div>
