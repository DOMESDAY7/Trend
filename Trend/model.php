
<!-- Espace commentaires -->
<?php
   
        ob_start();
        $sql_trend="SELECT * FROM billet WHERE id_billet='$id_billet' ";
        $req_trend=$link->query($sql_trend);
        $data_trend=$req_trend->fetch(PDO::FETCH_ASSOC);
        $trend_titre=$data_trend["titre"];
        $trend_content=$data_trend["article"]; 
        $trend_date=$data_trend["date"]; 
        $trend_data=ob_get_clean();
        
 
    ob_start();
    $sql_com="SELECT * FROM commentaire , utilisateurs , billet WHERE ext_billet=id_billet AND ext_utilisateur=id_utilisateur AND id_billet='$id_billet' ORDER BY post_date DESC; ";
    $req=$link->query($sql_com);
    ?>
<div class="containerComments">
    <?php while( $data = $req->fetch(PDO::FETCH_ASSOC)){
        // $date=$data["post_date"];
        ?>
    <div class="userComment" id=com<?php echo $data["id_commentaire"]; ?>>
        <span id="hashtag2"><a href="?com=show#com<?php echo $data["id_commentaire"]; ?>"> #</a></span>
        <div class="User">
            <div class="ppUser"></div>
            <p class="pseudoUser"> <?php echo $data["pseudo"]; ?> </p>
        </div>
        <p class="comment"> <?php echo $data["content"]; ?></p>
        <p class="dateUser"> <?php echo $data["post_date"] ;?> </p>
    </div>
    <?php } ?>

    <div class="noComments"></div>
</div>
<?php $comment=ob_get_clean(); 

?>
