
<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: * ");
header('Access-Control-Allow-Headers: Content-Type');
header("Access-Control-Request-Headers: *");
require '../db_connect/detetction.php';//bdd
//récupération des pseudos
if(!isset($_GET["pseudo"])){
}else{
    $pseudo=$_GET["pseudo"];
    $sql_API="SELECT pseudo FROM utilisateurs WHERE pseudo='$pseudo'";
    $req=$link->query($sql_API);
    while($data = $req -> fetch(PDO::FETCH_ASSOC)){
        echo (json_encode($data));
    }

}

?>

