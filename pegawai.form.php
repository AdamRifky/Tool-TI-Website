
<?php
    $action=$_GET['action'];
    
    $mysqli = new mysqli("localhost", "root", "", "ayo_main");
      if ($_GET['action']=="add"){
        $result = $mysqli->query("SELECT MAX(NIP) AS currentid FROM tb_Pegawai;");

        $row = $result->fetch_assoc(); //khusus single result
        $currentid=$row['currentid']; //tambahkan dengan 1 untuk id baru
        $nama="";
        $alamat="";
      }
      else if ($_GET['action']=="edit"){
        $currentid=$_GET['NIP'];
        $query="SELECT * from tb_Pegawai where NIP=".$currentid.";";
        //print_r($query);
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc(); //khusus single result
        //print_r($row);
        $nama=$row[''];
        $alamat=$row[''];

      }
    
  ?>
  <div class="col" style="padding-top: 20px;">
  <form action="pegawai.action.php">
    <div class="mb-3">
      <label for="id" class="form-label">NIP</label>
      <input type="text" class="form-control" name="NIP" id="NIP" placeholder="NIP" value="<?php echo $currentid;?>">
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" placeholder="tuliskan nama di sini" value="<?php echo $nama;?>">
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">DIVISI</label>
      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="tuliskan nama di sini" value="<?php echo $alamat;?>">
    </div>
    <input type="hidden" name="action" value="<?php echo $action;?>">
    <div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
  </form>
	</div>
