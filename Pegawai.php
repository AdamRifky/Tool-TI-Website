<div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="index.php?page=pegawai.form&action=add" role="button">Tambah</a>
    </div>
    
    <?php 
      $mysqli = new mysqli("localhost", "root", "", "ayo_main");
      $result = $mysqli->query("SELECT * from tb_Pegawai");
    ?>
    <table class="table table-striped">
        <tr>
            <th>NIP</th>
            <th>NAMA PEGAWAI </th>
            <th>KODE DIVISI</th>
            <th>ACTION</th>
        </tr>  
    <?php
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>";
        echo $row['NIP'];
        echo "</td>";
        echo "<td>";
        echo $row['NAMA_PEGAWAI'];
        echo "</td>";
        echo "<td>";
        echo $row['KODE_DIVISI'];
        echo "</td>";
        echo "<td>";
        echo "<a class='btn btn-primary me-md-2 btn-sm' href='index.php?page=pegawai.form&NIP=".$row['NIP']."&action=edit'>Edit</a>";
        echo "<a class='btn btn-danger me-md-2 btn-sm' href='Pegawai.action.php?NIP=".$row['NIP']."&action=delete'>Delete</a>";
        echo "</td>";
        
        echo "</tr>";
    }

    ?>
    </table>
