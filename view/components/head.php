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
    <title>

        <?php
        if (isset($_GET["back"])) {
            echo $back;
        } else {
            echo $page;
        } ?>

    </title>



</head>