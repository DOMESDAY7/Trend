<?php
session_start();
// mon controller va agir comme une sorte de routeur pour le backoffice
if ($_SESSION["pseudo"] != "admin") { // seul l'admin peut se connecter a l'adminPannel
    header("Location:?page=home");
}

if (isset($_GET["back"])) {
    $back = $_GET["back"];
    require "./view/components/head.php";
    require './model/' . $back . '.php';
    require './view/' . $back . '.php';
} else {
    require "./model/adminTrend.php";
    require "./view/components/head.php";
    require "./view/adminPannel.php";
}
if (isset($_POST["subAddTrend"])) {
    postTrend();
}
