<!-- Espace commentaires -->
<?php

ob_start();
$sql_trend = "SELECT * FROM billet WHERE id_billet='$id_billet' ";
$req_trend = $link->query($sql_trend);
$data_trend = $req_trend->fetch(PDO::FETCH_ASSOC);
$trend_titre = $data_trend["titre"];
$trend_content = $data_trend["article"];
$trend_date = $data_trend["date"];
$imgTrend = $data_trend["imgName"];
$trend_data = ob_get_clean();


ob_start();
$sql_com = "SELECT * FROM commentaire , utilisateurs , billet WHERE ext_billet=id_billet AND ext_utilisateur=id_utilisateur AND id_billet='$id_billet' ORDER BY post_date DESC ";
$req = $link->query($sql_com);
?>
<div class="containerComments">
    <?php while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        // $date=$data["post_date"];
    ?>
        <div class="userComment" id=com<?php echo $data["id_commentaire"]; ?>>
            <span id="hashtag2"><a href="?com=show#com<?php echo $data["id_commentaire"]; ?>"> #</a></span>
            <div class="User">
                <div class="ppUser"></div>
                <p class="pseudoUser"> <?php echo $data["pseudo"]; ?> </p>
            </div>
            <p class="comment"> <?php echo $data["content"]; ?></p>
            <p class="dateUser"> <?php echo $data["post_date"]; ?> </p>
        </div>
    <?php } ?>

    <div class="noComments"></div>
</div>
<?php $comment = ob_get_clean(); ?>



<!-- Modal ajout commentaire -->
<?php
ob_start();
$id_user = $_SESSION["id_user"];
$sql_canCom = "SELECT canComment FROM utilisateurs WHERE id_utilisateur= '$id_user'";
$req = $link->query($sql_canCom);
$res = $req->fetch(PDO::FETCH_ASSOC);
$canCom = $res["canComment"];
var_dump($canCom);
if ($canCom =="1"){
?>
<div class="BGmodal">
    <div class="croix">
        <img src="./public/img/croix.svg" alt="" class="svgCroix">
    </div>
    <div class="modal">
        <div class="userModal">
            <div class="ppModal"></div>
            <p class="pseudoModal"> <?php echo $_SESSION["pseudo"]; ?> </p>
        </div>
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Write a comment..."></textarea>
        <div class="BTNpost"> Let's post </div>
        <span class="message"></span>
    </div>
</div>
<?php }else{ ?>
<!-- No connected modal -->
<div class="BGmodal">
    <div class="noConnect">
        <div class="part">
            <h1>Whoops, it seems <span>you're connected !</span></h1>
            <p id="p1">To comment, we need you to create an account or connect to an account.</p>
        </div>

        <div class="part">
            <a href="?page=connexion" id="a1">Log in</a>
            <p>I want to <a href="?page=inscription" id="a2">sign up</a> now</p>
        </div>
    </div>
</div>
<?php } 
$modal = ob_get_clean();
?>