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
            if (!isset($_POST["pseudo"])){
                header("Location:index.php");
            }
            if($_SERVER['SERVER_NAME']=="localhost"){
                require '../db_connect/local.php';
            }else{
                require '../db_connect/server.php';
            }
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
            //faire un lien et le stocker dans $link
            
            mailverification($mail,$pseudo,$link);


            //MVC
            function controlHTML($string){
                htmlspecialchars($string);//injection script
                return $string;
            }
            function controlSQL($string){
                $forb=["DELETE","UPDATE","SELECT","<script>"];
                $string=str_replace($forb,"**",$string);//injection sql
                return $string;
            }
            //MVC
            function mailverification($email,$pseudo,$link){
                $subject="Confirmation of your account";
                $sql_grapTheKey="SELECT verificationKey from utilisateurs WHERE pseudo='$pseudo'";
                $db_key=$link->query($sql_grapTheKey);
                $db_key=$db_key->fetch(PDO::FETCH_ASSOC);
                $db_key=$db_key["verificationKey"];
                $db_key=password_hash($db_key,PASSWORD_DEFAULT);
                $link="<a href='trend.mathieuandry.fr/verification?key='$db_key'?pseudo=$pseudo>Check your email<a>";
                $text="Hello".$pseudo."!<br>
                To confirm your registration to trend click on this button:";
                $text = str_replace("\n.", "\n..", $text);
                $headers = array(
                    'From' => 'webmaster@trend.com',
                    'X-Mailer' => 'PHP/' . phpversion()
                );
                mail($email,$subject,$text,$headers);
            }

            //MVC
            function createKey(){
                $origin=1;
                $key=password_hash($origin,PASSWORD_DEFAULT);
                $origin++;
                echo $key;
                return $key;
            }
        
        ?>
        <main>
        <h1>Congratulations <?php echo $pseudo; ?>! You are registered to Trend </h1><div>🙌</div>
        <h3>We sent you a little welcome email</h3><div>💌</div>
        <a href="../connexion"><b>Login</b></a>
        </main>

    
</body>
</html>