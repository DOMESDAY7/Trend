<?php  
function connection(){
require './db_connect/detection.php';    

@$pseudo=$_POST["pseudo"];
$pseudo=strtolower($pseudo);
@$mdp=$_POST["mdp"];
//appel de la fonction control
$sql_verif="SELECT `pseudo`,`mdp`,id_utilisateur FROM `utilisateurs` WHERE `pseudo`='$pseudo'";
if (isset($_POST["sub"])){
    $req_count=$link->query($sql_verif);
    $verif=$req_count->rowCount();
    if ($verif==1){
        $data_verif=$req_count->fetch(PDO::FETCH_ASSOC);
        if (password_verify($mdp,$data_verif["mdp"] ) ){
            session_start();
            $_SESSION["id_user"]=$data_verif["id_utilisateur"];
            $_SESSION["pseudo"]=$pseudo;
            header('Location: ?page=home');
        
        }else{
            
            header('Location: ?page=connexion&error=true');
            
        }
    }else{
        
        header('Location: ?page=connexion&error=true');
    }
}
    }