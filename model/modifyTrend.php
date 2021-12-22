<?php
function showAllTrend()
{
  require "./db_connect/detection.php";
  $sql = "SELECT * FROM `billet`";
  $req = $link->query($sql);
?>

  <div class="list-group w-50">
    <?php while ($data = $req->fetch(PDO::FETCH_ASSOC)) { ?>
      <a href="#<?= $data["titre"]; ?>" class="list-group-item list-group-item-action contentTrend list-group-item-dark" aria-current="true" data-trend="<?= $data["id_billet"] ?>">
        <div>
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><?= $data["titre"]; ?></h5>

          </div>
          <p class="mb-1"><?= $data["short_description"] ?>.</p>
        </div>
        <a href="./photo/<?= $data["id_image"]; ?>" class="btn btn-secondary">see the image of the trend</a>
      </a>
      
      <!-- test de carte -->
      <!-- <a href="#<?= $data["titre"] ?>" class="contentTrend"> 
        <div class="card w-75 mb-5  bg-secondary">
          <div class="card-body">
            <h5 class="card-title"><?= $data["titre"] ?></h5>
            <p class="card-text"><?= $data["short_description"] ?></p>
            <a href="./photo/<?= $data["id_image"] ?>" class="btn btn-dark">see the image of the trend</a>
          </div>
        </div>
        </a> -->


    <?php } ?>
  </div>

<?php } ?>