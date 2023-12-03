<?php
require "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Docume nt</title>
</head>
<body>
<div class="row">
  <!-- kolom pertama -->  
  <div class="col-2">
		<?php include 'sidebar.php';?>
	</div>
  <!-- kolom kedua -->  
	<div class="col" style="padding-top: 20px;">
    <?php 
    if (isset($_GET['page'])){
    $target=$_GET['page'].".php";
    include $target;
    }

    ?>
	</div>
=======
    <title>Document</title>
</head>
<body>
    Coba ya bang
>>>>>>> 086ce412eb0a698ab008a5db6719a99073bc7ee9
</body>
</html>