

<?php
//   header('Content-Type: application/json');
  header("Access-Control-Allow-Origin: * ");
  header('Access-Control-Allow-Headers: Content-Type');
  header("Access-Control-Request-Headers: *");
    require '../db_connect/detection.php';
    
   //on prends toute les données trafiquant sur la page et on le met sous la forme de d'un tableau $data
    $data = json_decode(file_get_contents("php://input"),true);
    if(isset($data)){
      $content=$data["content"];
      $post_date=$data["post_date"];
      $ext_billet=$data["ext_billet"];
      $ext_utilisateur=$data["ext_utilisateur"];
      $sql="INSERT INTO `commentaire` (`id_commentaire`, `post_date`, `content`, `ext_billet`, `ext_utilisateur`) VALUES (NULL, '$post_date', '$content', '$ext_billet', '$ext_utilisateur')";
      $link->query($sql);
    }
  


