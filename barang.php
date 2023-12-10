<div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="index.php?page=barang.form&action=add" role="button">Tambah</a>
    </div>
    
    <?php 
      $mysqli = new mysqli("localhost", "root", "", "ayo_main");
      $result = $mysqli->query("SELECT * from tb_Barang");
    ?>
    <table class="table table-striped">
        <tr>
            <th>KODE BARANG</th>
            <th>ID MERK</th>
            <th>NAMA BARANG</th>
            <th>HARGA</th>
            <th>STOCK</th>
            <th>JUMLAH</th>
            <th>ACTION</th>
        </tr>  
    <?php
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>";
        echo $row['KODE_KONSOL'];
        echo "</td>";
        echo "<td>";
        echo $row['ID_MERK'];
        echo "</td>";
        echo "<td>";
        echo $row['NAMA_KONSOL'];
        echo "</td>";
        echo "<td>";
        echo $row['HARGA'];
        echo "</td>";
        echo "<td>";
        echo $row['STOK'];
        echo "</td>";
        echo "<td>";
        echo $row['JUMLAH'];
        echo "</td>";
        echo "<td>";
            echo "<a class='btn btn-primary me-md-2 btn-sm' href='index.php?page=barang.form&KODE_KONSOL=".$row['KODE_KONSOL']."&action=edit'>Perbarui</a>";
            
            // echo "<a class='btn btn-danger me-md-2 btn-sm' href='Pegawai.action.php?NIP=".$row['NIP']."&action=delete'>Delete</a>";
            echo "<form action='barang.action.php' method='POST' style ='display:inline;'>";
              echo "<input type='hidden' name='KODE_KONSOL' value='" . $row['KODE_KONSOL'] . "'>";
              echo "<input type='hidden' name='action' value='delete'>";
              echo "<button type='submit' class='btn btn-danger me-md-2 btn-sm' onclick='return confirm(\"Ingin menghapus data ini?\");'>Hapus</button>";
            echo "</form>";
          echo "</td>";
        
        echo "</tr>";
    }

    ?>
    </table>
