<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trends</title>
</head>
<body>
        <?php
            if($_SERVER['SERVER_NAME']=="localhost"){
                require '../db_connect/local.php';
            }else{
                require '../db_connect/server.php';
            }
            $pseudo=$_POST["pseudo"];
            $mail=$_POST["mail"];
            $mdp=$_POST["mdp"];
        
            $sql="INSERT INTO `utilisateurs` (`id_utilisateur`, `pseudo`, `login`, `mdp`) VALUES (NULL, '$pseudo', 'mail', '$mdp')";
            $req=$link->prepare($sql);
            //faire des bindValue ici
            control($sql);
            $req->execute();
            //faire un lien et le stocker dans $link
            mailverification($mail,$pseudo,$link);


            //MVC
            function control($string){
                htmlspecialchars($string);//injection script
                $forb=["DELETE","UPDATE","SELECT","<script>"];
                $string=str_replace($forb,"**",$string);//injection sql
                return $string;
            }
            //MVC
            function mailverification($email,$pseudo,$link){
                $text="Hello".$pseudo."!<br>
                To confirm your registration to trend click on this button:
                <a href=""></a>
                
                ";

                $text = str_replace("\n.", "\n..", $text);
                $headers = array(
                    'From' => 'webmaster@trend.com',
                    'X-Mailer' => 'PHP/' . phpversion()
                );
                mail($email,$subject,$text,$headers);
            }
        
        ?>
        <main>
        <h1>Congratulations <?php echo $pseudo; ?>! You are registered to Trend 😁</h1>
        <h5>We sent you a little welcome email</h5>
        </main>

    
</body>
</html>