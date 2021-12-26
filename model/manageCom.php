<?php
function showAllTrend()
{
    require "./db_connect/detection.php";
    $sql = "SELECT * FROM billet , commentaire WHERE id_billet=ext_billet  ";
    $req = $link->query($sql);
     ?>
     <ol class="list-group list-group-numbered">
   <?php while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
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
                    
                    <?php 
                    $path ="./public/img/trendPic/".$data["imgName"];
                   
                    if(file_exists($path)){ ?>
                    <img src="<?= $path ?>" alt="">
                    <?php }else{ ?>
                        <img src="./public/img/noImg.svg" alt="no image">
                   <?php } ?>
                </div>
            </div>
        </a>
  

<?php } ?>
</ol>
<?php } ?> 
