
<?php
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");

    $action=$_GET['action'];
    $currentid = "";
    $currentcode = "";
    $harga = "";
    $status = "";

      if ($_GET['action']=="add"){
        $result = $mysqli->query("SELECT MAX(SUBSTRING(ID_SEWA, 9)) AS currentid FROM tb_penyewaan_detail;");

        if (!$result) {
          die("Error: " . $mysqli->error);
        }
        
        $row = $result->fetch_assoc(); //khusus single result
        $max_number = (int)$row['currentid'];
        $new_number = $max_number + 1;
        
        $currentid = sprintf("SW-000-%02d", $new_number); //tambahkan dengan 1 untuk id baru
        $currentcode = "";
        $harga = "";
        $status = "";
      }
      else if ($_GET['action']=="edit"){
        $currentid = $_GET['ID_SEWA'];
        $query = "SELECT * FROM tb_penyewaan_detail WHERE ID_SEWA = '".$currentid."';";
        
        //print_r($query);
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc(); //khusus single result
        
        //print_r($row);
        $currentcode = $row['KODE_KONSOL'];
        $harga = $row['HARGA_SEWA'];
        $status = $row['STATUS'];

      }
    
  ?>
  <div class="col" style="padding-top: 20px;">
  <form action="pesanan.action.php" method="POST">
    <div class="mb-3">
      <label for="id" class="form-label">ID Sewa</label>
      <input type="text" class="form-control" name="ID_SEWA" id="currentid" placeholder="ID_SEWA" value="<?php echo $currentid;?>">
    </div>
    <div class="mb-3">
      <label for="KODE_KONSOL" class="form-label">Kode Konsol</label>
      <select class="form-control" name="KODE_KONSOL" id="currentcode" placeholder="Pilih konsol di sini">

        <?php
          $query = "SELECT KODE_KONSOL, NAMA_KONSOL FROM tb_barang ORDER BY KODE_KONSOL";
          $sqlnamasup = mysqli_query ($mysqli, $query);
          while($hasil = mysqli_fetch_array($sqlnamasup)) {
            $selected = ($hasil['KODE_KONSOL'] == $currentcode) ? "selected" : "";
            echo "<option value='" . $hasil['KODE_KONSOL'] . "' $selected>" . $hasil['NAMA_KONSOL'] . "</option>";
          }
        ?>
      </select>
      <!-- <input type="text" class="form-control" name="KODE_KONSOL" id="KODE_KONSOL" placeholder="Tuliskan kode konsol di sini" value="<?php echo $nama;?>"> -->
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga Sewa</label>
      <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga Sewa" value="<?php echo $harga;?>" readonly>
    </div>
    <input type="hidden" name="status" value="Masih Disewa">
    <input type="hidden" name="action" value="<?php echo $action;?>">
    <div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
  </form>
	</div>

