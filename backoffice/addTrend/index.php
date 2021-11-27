<?php 
// on vérifiera si l'utilisateur est bien admin

if(isset($_POST["sub"])){
    //on vérifie en amont en js si les champs sont remplis
    postTrend();
}
require 'model.php';
require 'vue.php';
