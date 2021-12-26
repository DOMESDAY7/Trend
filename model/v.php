<?php
require './db_connect/detection.php';
require "./model/inscription.php";
$pseudo = $_POST["pseudo"];
$pseudo = strtolower($pseudo);
$mail = $_POST["mail"];
$mdp = $_POST["mdp"];
$key = createKey();
$mdp = password_hash($mdp, PASSWORD_DEFAULT);
$sql = "INSERT INTO `utilisateurs` (`id_utilisateur`, `pseudo`, `login`, `mdp`,user_check,verificationKey) VALUES (NULL, '$pseudo', '$mail', '$mdp','0','$key')";
$req = $link->prepare($sql);
//faire des bindValue ici
controlHTML($sql);
$req->execute();
mailverification($mail, $pseudo, $link);



