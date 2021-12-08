<?php
// routeur
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if ($page != "trend" && $page != "adminPannel") {
        require './db_connect/detection.php'; // connexion à la base de donnée
        if ($page != "404") { //mettre les pages qui n'on pas besoin de model
            require './model/' . $page . '.php'; //importation du modèle relier à la page
        }
        require './view/components/head.php'; // importation de head
        require './view/' . $page . '.php'; // importation de la vue relier a la page}
    } else {
        if ($page == "adminPannel") {
            require './controller/adminPannel.php';
        } else {
            $id_billet = $_GET["id_billet"];
            require './controller/trend.php';
        }
    }
} else {
    $page = "home";
    require './view/components/head.php';
    require './model/home.php';
    require './view/home.php';
}
