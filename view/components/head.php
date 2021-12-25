<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/<?php if (isset($_GET["back"])) {
                                                    echo $back;
                                                } else {
                                                    echo $page;
                                                } ?>.css">
    <link rel="stylesheet" href="./view/components/Burger/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap" rel="stylesheet">
    <!-- montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <!-- overpass -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap" rel="stylesheet">
    <?php 
     if (isset($_GET["back"]) || $page == "adminPannel") {?>
           <!-- bootsrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
         
     <?php }?>
    <title>

        <?php
        if (isset($_GET["back"])) {
            echo $back;
        } else {
            echo $page;
        } ?>

    </title>



</head>