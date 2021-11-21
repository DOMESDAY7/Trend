<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trends</title>
    <link rel="stylesheet" href="styleV.css">
     <!-- montserrat -->
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <!-- overpass -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap" rel="stylesheet">
</head>
<body>
        <?php
            require '../db_connect/detetction.php';
            $pseudo=$_POST["pseudo"];
            $pseudo=strtolower($pseudo);
            $mail=$_POST["mail"];
            $mdp=$_POST["mdp"];
            $key=createKey();
            $mdp=password_hash($mdp,PASSWORD_DEFAULT);
            $sql="INSERT INTO `utilisateurs` (`id_utilisateur`, `pseudo`, `login`, `mdp`,user_check,verificationKey) VALUES (NULL, '$pseudo', '$mail', '$mdp','0','$key')";
            $req=$link->prepare($sql);
            //faire des bindValue ici
            controlHTML($sql);
            $req->execute();
            mailverification($mail,$pseudo,$link);


            require './model.php';
        
        ?>
        <main>
        <h1>Congratulations <?php echo $pseudo; ?>! You are registered to Trend </h1><div>🙌</div>
        <h3>We sent you a little welcome email</h3><div>💌</div>
        <a href="../connexion"><b>Login</b></a>
        </main>

    
</body>
</html>