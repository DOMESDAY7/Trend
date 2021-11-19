<?php
require '../db_connect/detetction.php';
$key=$_GET["key"];
$pseudo=$_GET["pseudo"];
$sql_grapTheKey="SELECT verificationKey from utilisateurs WHERE pseudo='$pseudo'";
                $db_key=$link->query($sql_grapTheKey);
                $db_key=$db_key->fetch(PDO::FETCH_ASSOC);
                $db_key=$db_key["verificationKey"];
if(password_verify($db_key,$key)){
    $sql_verif_is_ok="UPDATE `utilisateurs` SET `user_check` = '1' WHERE `pseudo` = '$pseudo'";
    $link->query($sql_verif_is_ok);

    ?>
    <h1>Your account has been checked✅</h1>
<?php } ?>




?>