<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend - Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <?php
            if($_SERVER['SERVER_NAME']=="localhost"){
                require '../db_connect/local.php';
            }else{
                require '../db_connect/server.php';
            }
            ?>
    <form method="POST">
        <img src="../img/profil.svg" alt="">
        <input type="text" name="pseudo" id="" placeholder="Pseudo">
        <input type="password" name="mdp" id="" placeholder="Mot de passe">
        <button type="submit">Se connecter</button>
    </form>
<?php
    $pseudo=$_POST["pseudo"];
    $mdp=$_POST["mdp"];
    $sql_verif="SELECT `login`,`mdp` FROM `utilisateurs` WHERE `login`='$login'";

    $req_count=$link->query($sql_verif);
    $verif=$req_count->rowCount();
    if ($verif==1){
        $data_verif=$req_count->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password,$data_verif["mot_de_passe"] ) ){
            session_start();
            $_SESSION["login"]=$data_verif["login"];
            header('Location: ./consultation.php');
        
        }else{
            header('Location: ./login.php?error=mdp');
            ?>
            <h1>tu n'as pas le bon mot de passe</h1>
            <?php
        }
    }else{
        echo"tu existe pas";
        header('Location: ./login.php?error=login');
    }
    

?>
<script src="script.js"></script>
</body>

</html>