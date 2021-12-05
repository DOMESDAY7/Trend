<?php
$search = stripslashes(file_get_contents("php://input"));
require '../db_connect/detection.php';
$sql = "SELECT* FROM billet WHERE titre LIKE '$search%' ORDER BY date DESC";
$query=$link -> query($sql);// bindValue et requête préparé
$data = $query ->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);