<?php ob_start();
    require './db_connect/detetction.php';
    $key=$_GET["key"];
    $pseudo=$_GET["pseudo"];
    $sql_grapTheKey="SELECT verificationKey from utilisateurs WHERE pseudo='$pseudo'";
                    $req=$link->query($sql_grapTheKey);
                    $db_key=$req->fetch();
                    $in_db_key=$db_key["verificationKey"];
    if(password_verify($in_db_key,$key)){
        $sql_verif_is_ok="UPDATE `utilisateurs` SET `user_check` = '1', `canComment` = '1' WHERE `pseudo` = '$pseudo'";
        $link->query($sql_verif_is_ok);
    
        ?>
        <h1>Your account has been checked✅</h1>
        <a href="?page=connexion">Log in</a>
    <?php }else{
    ?>
        <h1>There is a problem 🤔</h1>
        <a href="?page=inscription">Retry</a>
    <?php } 
    
    $content = ob_get_clean();
    ?>