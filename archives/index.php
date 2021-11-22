<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../component/Burger/style.css">
    <!-- Montserrat font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Overpass font -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Archives</title>
</head>
<body>
    <?php require '../db_connect/detetction.php'; ?>



<?php
    include "../component/Burger/index.php";
?>

    <script src="../component/Burger/java.js"></script>
</body>
</html>