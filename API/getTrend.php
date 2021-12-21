<?php
require "../db_connect/detection.php";
$id = $_GET["id_trend"];
$sql ="SELECT* FROM billet WHERE id_billet=$id";
$res =$link->query($sql);
$req=$res ->fetch();
echo json_encode($req);