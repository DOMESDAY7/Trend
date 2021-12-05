<?php function lastThree(){?>
    <?php 
    require './db_connect/detection.php';
     $sql="SELECT short_description , id_image , date , titre, id_billet  FROM billet ORDER BY date DESC ";
     $req=$link -> query($sql);
   
    while(($data=$req -> fetch(PDO::FETCH_ASSOC)) ){ 
        
        
        ?>
        <?php $date=date_create($data["date"]) ?>
        
        <a href="../Trend/?id_billet=<?php echo $data["id_billet"]; ?>">
            <div class="exTrend1">
                <div class="textsTrend">
                <!-- pour le hashtag on va mettre le lien de l'article -->
                    <h1><span id="hashtag">#</span> <?php echo $data["titre"]; ?> </h1>
                    <p class="description"> <?php echo $data["short_description"]; ?></p>
                    <p class="date"><?php echo date_format($date,'d.M.Y') ; ?></p>
                </div>
                <div class="imgTrend">
                    <img src="./public/img/pc.jpg" alt="">
                </div>
            </div>
        </a>
    <?php 
    }
}
?>
