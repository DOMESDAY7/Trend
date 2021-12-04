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



    <!-- <main role="main"> -->
        <!-- Titre et barre de recherche + filtres -->
        <div class="part1">
            <h1 class="title">Archives</h1>
            <div class="searchArchive">
                <input type="search" name="search" id="search" placeholder="Search...">
                <div class="filterDate">
                    <div class="firstClick">
                        <div class="BTNdate">
                            <img src="../img/arrow2.svg" alt="">
                            <p>Date</p>
                        </div>
                        <div class="miniModal">
                            <form action="">
                                <div class="choice1">
                                    <input type="radio" name="choice" id="newer">
                                    <label for="newer">Newer</label>
                                </div>
                                <div class="choice2">
                                    <input type="radio" name="choice" id="latest">
                                    <label for="latest">Latest</label>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Trends des archives -->
        <div class="part2">

            <!-- <div class="containerLT"> -->
                
                <!-- <?php require './model.php';  -->
                <!-- lastThree(); -->
                <!-- ?> -->
                    <!-- <a href="#">I want to see more</a> -->
            <!-- </div> -->

            <!-- No Trend found -->
            <div class="BGnop">
                <img src="../img/NoTrend.svg" alt="">
                <span class="sentence">No trend found.</span>                
            </div>

        </div>
    <!-- </main> -->



<?php
    include "../component/Burger/index.php";
?>

    <script src="../component/Burger/java.js"></script>
    <script text="text/javascript" src="script.js"></script>
</body>
</html>