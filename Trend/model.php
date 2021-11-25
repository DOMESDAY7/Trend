<?php 
ob_start();

 while( $data = $req->fetch(PDO::FETCH_ASSOC)){ ?>
        <div class="userComment" id=#<?php $data["id_commentaire"]; ?>>
            <span id="hashtag2"><a href="#<?php echo $data["id_commentaire"]; ?>"> #</a></span>
            <div class="User">
                <div class="ppUser"></div>
                <p class="pseudoUser"> <?php echo $data["pseudo"]; ?> </p>
            </div>
            <p class="comment"> <?php echo $data["content"]; ?></p>
            <p class="dateUser"> <?php  echo $data["post_date"]; ?> </p>
        </div>
<?php } ?>
<?php $comment=ob_get_clean(); ?>
<?php
var_dump($comment);
include '../'; ?>
