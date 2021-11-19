<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend - verification</title>
</head>
<body>
<?php
require '../db_connect/detetction.php';
$key=$_GET["key"];
$pseudo=$_GET["pseudo"];
$sql_grapTheKey="SELECT verificationKey from utilisateurs WHERE pseudo='$pseudo'";
                $req=$link->query($sql_grapTheKey);
                $db_key=$req->fetch();
                $in_db_key=$db_key["verificationKey"];
if(password_verify($in_db_key,$key)){
    $sql_verif_is_ok="UPDATE `utilisateurs` SET `user_check` = '1' WHERE `pseudo` = '$pseudo'";
    $link->query($sql_verif_is_ok);

    ?>
    <h1>Your account has been checked✅</h1>
<?php }else{
?>
    <h1>There is a problem 🤔</h1>
<?php } ?>
    
</body>
</html>






