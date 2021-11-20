<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
        <link rel="stylesheet" href="../component/Burger/style.css">
        <link rel="stylesheet" href="style.css">
    <!-- Montserrat font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600700&display=swap" rel="stylesheet">
    <!-- Overpass font -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;600;700&display=swap" rel="stylesheet">
    <title><!-- Mettre le nom du trend en PHP ici --></title>
</head>
<body>
    <?php require '../db_connect/detetction.php';?>

    <div class="containerTrend">

        <!-- Infos -->
        <div class="infos"></div>

        <!-- Image -->
        <div class="imgtrend2">
            <img src="../img/pc2.jpg" alt="">
        </div>

        <!-- Texte -->
        <div class="texTrend">
            <p class="texts">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis voluptatem mollitia delectus, accusantium ipsa, quidem, vitae magni laboriosam ullam explicabo aspernatur! Nobis voluptates aliquam odio accusamus, aliquid mollitia facere nulla?</p>
            <p class="date"> 23.oct.2021 </p>
        </div>

        <!-- Boutons utilitaires -->
        <div class="utilities">
            <div class="SHcomments">
                <div class="svg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.257 10.962C21.731 11.582 21.731 12.419 21.257 13.038C19.764 14.987 16.182 19 12 19C7.81801 19 4.23601 14.987 2.74301 13.038C2.51239 12.7411 2.38721 12.3759 2.38721 12C2.38721 11.6241 2.51239 11.2589 2.74301 10.962C4.23601 9.013 7.81801 5 12 5C16.182 5 19.764 9.013 21.257 10.962V10.962Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p> Show comments </p>
            </div>
            <div class="putComment"></div>
        </div>
    </div>
    


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