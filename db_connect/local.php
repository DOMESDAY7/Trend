<?php
 $link = new PDO('mysql:host=localhost;dbname=trends', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
mysqli_set_charset($link, "utf8mb4");