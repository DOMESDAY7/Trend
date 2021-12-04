<?php

if(isset($_GET["page"])){
    $page=$_GET["page"];
    require './db_connect/detection.php'; // connexion à la base de donnée
    if ($page != "404"){ //mettre les pages qui n'on pas besoin de model
        require './model/'.$page.'.php'; //importation du modèle relier à la page
    }
    require './view/components/head.php'; // importation de head
    require './view/'.$page.'.php'; // importation de la vue relier a la page
}else{
    require 'view/home.php';
}
