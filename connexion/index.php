<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend - Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap" rel="stylesheet">
    <!-- montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <!-- overpass -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <?php
       require '../db_connect/detetction.php';
    ?>
    <form method="POST">
        <span class="content_bj">
            <h1 class=bjPseudo>Hello &nbsp</h1>
            <h1 class="titlePseudo">,</h1>
        </span>
        <img src="../img/profil.svg" alt="" class="profil">
        <input type="text" name="pseudo"  placeholder="Pseudo" class="pseudo" required="require">
        <input type="password" name="mdp"  placeholder="Mot de passe" class="mdp" required="require"  id="current-password">
        <span class="message"></span><br>
        <button type="submit" name="sub">Se connecter</button>
    </form>
    <?php
        if (isset($_GET["error"])){
            echo "<script>document.querySelector('span.message').textContent='Your identifiers are not correct 🤔'</script>";
        }
        @$pseudo=$_POST["pseudo"];
        $pseudo=strtolower($pseudo);
        @$mdp=$_POST["mdp"];
        //appel de la fonction control
        $sql_verif="SELECT `pseudo`,`mdp` FROM `utilisateurs` WHERE `pseudo`='$pseudo'";
        if (isset($_POST["sub"])){
            $req_count=$link->query($sql_verif);
            $verif=$req_count->rowCount();
            if ($verif==1){
                $data_verif=$req_count->fetch(PDO::FETCH_ASSOC);
                if (password_verify($mdp,$data_verif["mdp"] ) ){
                    session_start();
                    $_SESSION["pseudo"]=$pseudo;
                    header('Location: ../home');
                
                }else{
                    
                    header('Location: ../connexion?error=true');
                    
                }
            }else{
                
                header('Location: ../connexion?error=true');
            }
        }
    

    ?>
    <article>No account ?<a href="../inscription"> <b>Sign up now</b></a></article>
    <script src="script.js"></script>
</body>

</html>