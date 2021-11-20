<?php session_start()?>
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600700&display=swap" rel="stylesheet">
    <!-- Overpass font -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600;700&display=swap" rel="stylesheet">
    <title><!-- Mettre le nom du trend en PHP ici --></title>
</head>
<body>
    <?php require '../db_connect/detetction.php';?>

    <main>

    </main>
    


    <a href="../home/index.php" class="back"> 
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM25 10.5L2 10.5L2 13.5L25 13.5L25 10.5Z" fill="white"/></svg>
        <p>Back to Trend's list</p>
    </a>



<?php
    include "../component/Burger/index.php";
?>

    <script src="../component/Burger/java.js"></script>
</body>
</html>