<?php 
require "../db_connect/detection.php";
$id = $_GET["userId"];
$sql ="DELETE FROM `utilisateurs` WHERE `utilisateurs`.`id_utilisateur` = $id";
$link ->query($sql);