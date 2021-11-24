<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API commentaire</title>
</head>
<body>
    <?php
    require '../db_connect/detetction.php';
    $sql="SELECT * FROM commentaire";
    $req=$link->query($sql);
    while($data=$req->fetch(PDO::FETCH_ASSOC)){
        echo(json_encode($data));
    }
    ?>  
</body>
</html>