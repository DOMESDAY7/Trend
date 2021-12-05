<?php function lastThree(){?>
    <?php 
    require './db_connect/detection.php';
     $sql="SELECT short_description , id_image , date , titre, id_billet  FROM billet ORDER BY date DESC ";
     $req=$link -> query($sql);
   
    while(($data=$req -> fetch(PDO::FETCH_ASSOC)) ){ 
        
        
        ?>
        <?php $date=date_create($data["date"]) ?>
        
        <a href="?page=trend&id_billet=<?= $data["id_billet"]; ?>">
            <div class="exTrend1">
                <div class="textsTrend">
                <!-- pour le hashtag on va mettre le lien de l'article -->
                    <h1><span id="hashtag">#</span> <?= $data["titre"]; ?> </h1>
                    <p class="description"> <?= $data["short_description"]; ?></p>
                    <p class="date"><?= date_format($date,'d.M.Y') ; ?></p>
                </div>
                <div class="imgTrend">
                    <img src="./public/img/pc.jpg" alt="">
                </div>
            </div>
        </a>
    <?php 
    }
}
if(isset($_GET["id_billet"])){
    $id_billet = $_GET["id_billet"];
    header("Location:/?page=trend&id_billet=".$id_billet);
}
?>
