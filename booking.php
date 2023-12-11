<div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="index.php?page=booking.form&action=add" role="button">Tambah</a>
    </div>
    
    <?php 
      $mysqli = new mysqli("localhost", "root", "", "ayo_main");
      $result = $mysqli->query("SELECT * from tb_penyewaan");
    ?>
    <table class="table table-striped">
        <tr>
            <th>ID SEWA</th>
            <th>ID PELANGGAN</th>
            <th>TANGGAL SEWA</th>
            <th>TANGGAL KEMBALI</th>
            <th>ACTION</th>
        </tr>  
    <?php
    foreach ($result as $row) {
        echo "<tr>";

          echo "<td>";
            echo $row['ID_SEWA'];
          echo "</td>";

          echo "<td>";
            echo $row['ID_PELANGGAN'];
          echo "</td>";
          
          echo "<td>";
            echo $row['TANGGAL_SEWA'];
          echo "</td>";

          echo "<td>";
            echo $row['TANGGAL_KEMBALI'];
          echo "</td>";

          echo "<td>";
            echo "<a class='btn btn-primary me-md-2 btn-sm' href='index.php?page=booking.form&ID_SEWA=".$row['ID_SEWA']."&action=edit'>Perbarui</a>";
            
            echo "<form action='booking.action.php' method='POST' style ='display:inline;'>";
              echo "<input type='hidden' name='ID_SEWA' value='" . $row['ID_SEWA'] . "'>";
              echo "<input type='hidden' name='action' value='delete'>";
              echo "<button type='submit' class='btn btn-danger me-md-2 btn-sm' onclick='return confirm(\"Ingin menghapus data ini?\");'>Hapus</button>";
            echo "</form>";
          echo "</td>";
        
        echo "</tr>";
    }

    ?>
    </table>
