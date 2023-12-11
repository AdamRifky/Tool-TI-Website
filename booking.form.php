
<?php
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");

    $action=$_GET['action'];
    $currentid = "";
    $pelanggan = "";
    $sewa = "";
    $kembali = "";

      if ($_GET['action']=="add"){
        $result = $mysqli->query("SELECT MAX(SUBSTRING(ID_SEWA, 9)) AS currentid FROM tb_penyewaan;");

        if (!$result) {
          die("Error: " . $mysqli->error);
        }
        
        $row = $result->fetch_assoc(); //khusus single result
        $max_number = (int)$row['currentid'];
        $new_number = $max_number + 1;
        
        $currentid = sprintf("SW-000-%02d", $new_number); //tambahkan dengan 1 untuk id baru
        $pelanggan = "";
        $sewa = "";
        $kembali = "";
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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

  <div class="col" style="padding-top: 20px;">
  <form action="booking.action.php" method="POST">
    <div class="mb-3">
      <label for="id" class="form-label">ID Sewa</label>
      <input type="text" class="form-control" name="ID_SEWA" id="currentid" placeholder="ID Sewa" value="<?php echo $currentid;?>">
    </div>
    <div class="mb-3">
      <label for="ID_PELANGGAN" class="form-label">ID Pelanggan</label>
      <select class="form-control" name="ID_PELANGGAN" id="pelanggan" placeholder="Pilih data pelanggan di sini">

        <?php
          $query = "SELECT ID_PELANGGAN, NAMA_PELANGGAN FROM tb_pelanggan ORDER BY ID_PELANGGAN";
          $sqlnamasup = mysqli_query ($mysqli, $query);
          while($hasil = mysqli_fetch_array($sqlnamasup)) {
            $selected = ($hasil['ID_PELANGGAN'] == $currentcode) ? "selected" : "";
            echo "<option value='" . $hasil['ID_PELANGGAN'] . "' $selected>" . $hasil['NAMA_PELANGGAN'] . "</option>";
          }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="sewa" class="form-label">Tanggal Sewa</label>
      <input type="text" class="form-control" name="sewa" id="sewa" placeholder="tahun-bulan-tanggal" value="<?php echo $sewa;?>">
    </div>
    <div class="mb-3">
      <label for="kembali" class="form-label">Tanggal Kembali</label>
      <input type="text" class="form-control" name="kembali" id="kembali" placeholder="tahun-bulan-tanggal" value="<?php echo $kembali;?>">
    </div>
    <input type="hidden" name="action" value="<?php echo $action;?>">
    <div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
  </form>

  <script>
  $( function() {
    $( "#sewa" ).datepicker({
        dateformat : "yyyy-mm-dd",
        dateMonth : true,
        dateYear : true
    });
  } );

  $( function() {
    $( "#kembali" ).datepicker({
        dateformat : "yyyy-mm-dd",
        dateMonth : true,
        dateYear : true
    });
  } );
  </script>
	</div>
