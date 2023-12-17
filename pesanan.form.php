
<?php
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");

    $action=$_GET['action'];
    $sewa = "";
    $konsol = "";
    $harga = "";
    $status = "";

      if ($_GET['action']=="add"){
        
        $sewa = "";
        $konsol = "";
        $harga = "";
      }
      else if ($_GET['action']=="edit"){
        $sewa = $_GET['ID_SEWA'];
        $konsol =$_GET['KODE_KONSOL'];
        $query = "SELECT * FROM tb_penyewaan_detail WHERE ID_SEWA = '".$sewa." AND KODE_KONSOL ='".$konsol." ';";
        
        //print_r($query);
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc(); //khusus single result
        
        //print_r($row);
        $harga = $row['HARGA_SEWA'];
        $status = $row['STATUS'];

      }
    
  ?>
  <div class="col" style="padding-top: 20px;">
  <form action="pesanan.action.php" method="POST">
  <div class="form-group">
      <label for="alamat" class="form-label">ID SEWA</label>
      <select class="form-control" name="KODE_DIVISI" id="alamat" placeholder="Pilih divisi di sini">

        <?php
          $query = "SELECT ID_SEWA FROM tb_penyewaan ORDER BY ID_SEWA";
          $sqlnamasup = mysqli_query ($mysqli, $query);
          while($hasil = mysqli_fetch_array($sqlnamasup)) {
            $selected = ($hasil['ID_SEWA'] == $sewa) ? "selected" : "";
            echo "<option value='" . $hasil['ID_SEWA'] . "' $selected>" . $hasil['ID_SEWA'] . "</option>";
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="alamat" class="form-label">KONSOL</label>
      <select class="form-control" name="KODE_DIVISI" id="alamat" placeholder="Pilih divisi di sini">

        <?php
          $query = "SELECT KODE_KONSOL, NAMA_KONSOL FROM tb_barang ORDER BY KODE_KONSOL";
          $sqlnamasup = mysqli_query ($mysqli, $query);
          while($hasil = mysqli_fetch_array($sqlnamasup)) {
            $selected = ($hasil['KODE_KONSOL'] == $konsol) ? "selected" : "";
            echo "<option value='" . $hasil['KODE_KONSOL'] . "' $selected>" . $hasil['NAMA_KONSOL'] . "</option>";
          }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">STATUS</label>
      <input type="text" class="form-control" name="NAMA_PEGAWAI" id="nama" placeholder="Tuliskan status di sini" value="<?php echo $status;?>">
    </div>
    <input type="hidden" name="action" value="<?php echo $action;?>">
    <div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
  </form>
	</div>
