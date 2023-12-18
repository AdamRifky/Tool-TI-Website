<div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="index.php?page=pelanggan.form&action=add" role="button">Tambah</a>
    </div>
    
    <style>
      td{
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 200px;
      }
    </style>
    
    <?php 
      $mysqli = new mysqli("localhost", "root", "", "ayo_main");
      $result = $mysqli->query("SELECT * from tb_Pelanggan");
    ?>
    <table class="table table-info table-striped">
        <tr>
            <th>ID PELANGGAN</th>
            <th>NAMA PELANGGAN </th>
            <th>ALAMAT</th>
            <th>NO TELEPON</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>  
    <?php
    foreach ($result as $row) {
        echo "<tr>";

          echo "<td>";
            echo $row['ID_PELANGGAN'];
          echo "</td>";

          echo "<td>";
            echo $row['NAMA_PELANGGAN'];
          echo "</td>";
          
          echo "<td>";
            echo $row['ALAMAT'];
          echo "</td>";

          echo "<td>";
            echo $row['NOMOR_TELEPON'];
          echo "</td>";

          echo "<td>";
            echo $row['PASSWORD'];
          echo "</td>";

          echo "<td>";
            echo "<a class='btn btn-primary me-md-2 btn-sm' href='index.php?page=pelanggan.form&ID_PELANGGAN=".$row['ID_PELANGGAN']."&action=edit'>Perbarui</a>";
            
            // echo "<a class='btn btn-danger me-md-2 btn-sm' href='Pegawai.action.php?NIP=".$row['NIP']."&action=delete'>Delete</a>";
            echo "<form action='pelanggan.action.php' method='POST' style ='display:inline;'>";
              echo "<input type='hidden' name='ID_PELANGGAN' value='" . $row['ID_PELANGGAN'] . "'>";
              echo "<input type='hidden' name='action' value='delete'>";
              echo "<button type='submit' class='btn btn-danger me-md-2 btn-sm' onclick='return confirm(\"Ingin menghapus data ini?\");'>Hapus</button>";
            echo "</form>";
          echo "</td>";
        
        echo "</tr>";
    }

    ?>
    </table>
