<?php

function lastThree()
{
    require './db_connect/detection.php';
    $sql = "SELECT * FROM billet ORDER BY date DESC ";
    $req = $link->query($sql);
    $cpt = 0;
    ?>

    <?php while (($data = $req->fetch(PDO::FETCH_ASSOC)) && ($cpt < 3)) {


?>
        <?php $date = date_create($data["date"]);?>


            <a href="?page=trend&id_billet=<?= $data["id_billet"]; ?>" class="linkContainerTrend" data-date = <?=  date_format($date, 'd.M.Y') ?>>
                <div class="contentTrend">
                    <div class="textsTrend">
                        <!-- pour le hashtag on va mettre le lien de l'article -->
                        <h1><span id="hashtag">#</span> <?= $data["titre"]; ?> </h1>
                        <p class="description"> <?= $data["short_description"]; ?></p>
                        <p class="date"><?= date_format($date, 'd.M.Y'); ?></p>
                    </div>
                    <div class="imgTrend">
                        <img src="./public/img/trendPic/<?=$data["imgName"] ?>" >
                    </div>
                </div>
            </a>

<?php $cpt++;
    }
           
}?>