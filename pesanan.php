<div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="index.php?page=customer.form&action=add" role="button">Tambah</a>
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
        echo "<a class='btn btn-primary me-md-2 btn-sm' href='index.php?page=customer.form&id_customer=".$row['KODE_KONSOL']."&action=edit'>Edit</a>";
        echo "<a class='btn btn-danger me-md-2 btn-sm' href='customer.action.php?id_customer=".$row['KODE_KONSOL']."&action=delete'>Delete</a>";
        echo "</td>";
        
        echo "</tr>";
    }

    ?>
    </table>
