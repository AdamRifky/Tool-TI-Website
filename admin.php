<?php
require "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<!--BELOMMMMMMMM ISI APAA APAA GTW BUAT APAAA-->
<body>
    <div class="row">
        <!-- kolom pertama -->
        <div class="col-2">
            <?php include 'sidebar.php'; ?>
        </div>
        <!-- kolom kedua -->
        <div class="col" style="padding-top: 20px;">
            <?php
            if (isset($_GET['page'])) {
                $target = $_GET['page'] . ".php";
                include $target;
            }

            ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>