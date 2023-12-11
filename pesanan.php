<div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="index.php?page=pesanan.form&action=add" role="button">Tambah</a>
    </div>
    
    <?php 
      $mysqli = new mysqli("localhost", "root", "", "ayo_main");
      $result = $mysqli->query("SELECT * from tb_Penyewaan_Detail");
    ?>
    <table class="table table-striped">
        <tr>
            <th>ID SEWA</th>
            <th>KODE KONSOL</th>
            <th>HARGA SEWA</th>
            <th>STATUS</th>
            <th>ACTION</th>
        </tr>  
    <?php
    foreach ($result as $row) {
        echo "<tr>";

          echo "<td>";
            echo $row['ID_SEWA'];
          echo "</td>";

          echo "<td>";
            echo $row['KODE_KONSOL'];
          echo "</td>";
          
          echo "<td>";
            echo $row['HARGA_SEWA'];
          echo "</td>";

          echo "<td>";
            echo $row['STATUS'];
          echo "</td>";

          echo "<td>";
            echo "<a class='btn btn-primary me-md-2 btn-sm' href='index.php?page=pegawai.form&NIP=".$row['ID_SEWA']."&action=edit'>Perbarui</a>";
            
            // echo "<a class='btn btn-danger me-md-2 btn-sm' href='Pegawai.action.php?NIP=".$row['NIP']."&action=delete'>Delete</a>";
            echo "<form action='pegawai.action.php' method='POST' style ='display:inline;'>";
              echo "<input type='hidden' name='NIP' value='" . $row['ID_SEWA'] . "'>";
              echo "<input type='hidden' name='action' value='delete'>";
              echo "<button type='submit' class='btn btn-danger me-md-2 btn-sm' onclick='return confirm(\"Ingin menghapus data ini?\");'>Hapus</button>";
            echo "</form>";
          echo "</td>";
        
        echo "</tr>";
    }

    ?>
    </table>
