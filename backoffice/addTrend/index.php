<?php 
require 'model.php';
if(isset($_POST["sub"])){
    //on vérifie en amont en js si les champs sont remplis
    postTrend();
}

require 'vue.php';
