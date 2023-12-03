<div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="index.php?page=customer.form&action=add" role="button">Tambah</a>
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
        echo "<a class='btn btn-primary me-md-2 btn-sm' href='index.php?page=customer.form&id_customer=".$row['KODE_KONSOL']."&action=edit'>Edit</a>";
        echo "<a class='btn btn-danger me-md-2 btn-sm' href='customer.action.php?id_customer=".$row['KODE_KONSOL']."&action=delete'>Delete</a>";
        echo "</td>";
        
        echo "</tr>";
    }

    ?>
    </table>
