
<?php function lastThree(){?>
    <?php 
    require '../db_connect/detetction.php';
     $sql="SELECT short_description , id_image , date , titre  FROM billet ORDER BY date DESC ";
     $req=$link -> query($sql);
     $cpt=0;
    
    while(($data=$req -> fetch()) && ($cpt<3)){ 
        
        
        ?>
        <?php $date=date_create($data["date"]) ?>
        
        <div class="exTrend1">
            <div class="textsTrend">
            <!-- pour le hashtag on va mettre le lien de l'article -->
                <h1><span id="hashtag">#</span> <?php echo $data["titre"]; ?> </h1> 
                <p class="description"> <?php echo $data["short_description"]; ?></p>
                <p class="date"><?php echo date_format($date,'d.M.Y') ; ?></p>
            </div>
            <div class="imgTrend">
                <img src="../img/pc.jpg" alt="">
            </div>
        </div>
    <?php $cpt++; 
    }
}
?>
