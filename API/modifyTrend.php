<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"),true);
$id=$_GET["id_trend"];
$article =$data["article"];
$short_description=$data["short_description"];
$titre = $data["titre"];
echo $article;
require "../db_connect/detection.php";
$sql ="UPDATE `billet` SET `titre` = '$titre', `article` = '$article', `short_description` = '$short_description' WHERE `billet`.`id_billet` = $id";
$link->query($sql);