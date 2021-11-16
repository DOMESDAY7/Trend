<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend - API</title>
</head>
<body>
        <?php
        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: * ");
        header('Access-Control-Allow-Headers: Content-Type');
        header("Access-Control-Request-Headers: *");
        if($_SERVER['SERVER_NAME']=='localhost'){
            require '../db_connect/local.php';
        }else{
            require '../db_connect/server.php';
        }
        if(!isset($_GET["pseudo"])){
            $sql_API="SELECT * FROM utilisateurs";
            $req=$link->query($sql_API);
            while($data=$req->fetch()){
                echo(json_encode($data));
            }
        }else{
            $id=$_GET["pseudo"];
            $sql_API="SELECT * FROM utilisateurs WHERE pseudo='$pseudo' ";
            $req=$link->query($sql_API);
            $data = $req -> fetch();
            echo (json_encode($data));
        }
        
        ?>
    
</body>
</html>