<?php
require "../db_connect/detection.php";
if (isset($_GET["block"])) {
    $id_user = $_GET["id_user"];
    $sql = "UPDATE `utilisateurs` SET `canComment` = '0' WHERE `utilisateurs`.`id_utilisateur` = $id_user";
    $link->query($sql);
}else{
    $id_user = $_GET["id_user"];
    $sql = "UPDATE `utilisateurs` SET `canComment` = '1' WHERE `utilisateurs`.`id_utilisateur` = $id_user";
    $link->query($sql);
}
