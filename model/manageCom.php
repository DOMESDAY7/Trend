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
       
  <li class="list-group-item d-flex justify-content-between align-items-start bg-secondary text-white w-50 m-auto">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><?= $data["titre"] ?></div>
    <?= $data["short_description"] ?>
    </div>
    <span class="badge bg-danger rounded-pill">14</span>
  </li>
  

<?php } ?>
</ol>
<?php } ?> 
