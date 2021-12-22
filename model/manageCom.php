<?php
function showComTrend()
{
    require "./db_connect/detection.php";
    $sql = "SELECT* FROM billet , commentaire WHERE 'ext_billet = 'id_billet' ";
    $req = $link->query($sql);
    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <?= $data["titre"]; ?>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <p>tous les coms ICI</p>
            </div>
        </div>
        <?php  echo $data; ?>

<?php }
} 
