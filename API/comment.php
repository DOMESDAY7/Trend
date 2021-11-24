<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="" id="">
        <input type="submit" value="test">
    </form>
</body>
</html>

<?php
//   header('Content-Type: application/json');
  header("Access-Control-Allow-Origin: * ");
  header('Access-Control-Allow-Headers: Content-Type');
  header("Access-Control-Request-Headers: *");
    require '../db_connect/detetction.php';
    
   
    var_dump($_POST);
    $content=$_POST["content"];
    $post_date=$data["post_date"];
    $ext_billet=$data["ext_billet"];
    $ext_utilisateur=$data["ext_utilisateur"];
    $sql="INSERT INTO `commentaire` (`id_commentaire`, `post_date`, `content`, `ext_billet`, `ext_utilisateur`) VALUES (NULL, '$post_date', '$content', '$ext_billet', '$ext_utilisateur')";
    //peut être faire une requête préparé pour avec des filter_var
    $link->query($sql);



    





    

    // $content = trim(file_get_contents("php://input"));

    // $data = json_decode($content, true);
    // $data['success'] = true;
    
    // echo json_encode($data);




    // $sql="SELECT * FROM commentaire";
    // $req=$link->query($sql);
    // while($data=$req->fetch(PDO::FETCH_ASSOC)){
    //     echo(json_encode($data));
    // }
?>