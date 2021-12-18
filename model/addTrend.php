<?php
function encodage($article)
{
    filter_var($article, FILTER_SANITIZE_SPECIAL_CHARS);
    // $article = str_replace("&#039;","'",$article);
    // $article = str_replace("&#8217;","'",$article);
    // $article = str_replace("&quot;",'"',$article);
    // $article = str_replace('<br>','',$article);
    // $article = str_replace('<br />','',$article);
    // $article = str_replace("&lt;","<",$article);
    // $article = str_replace("&gt;",">",$article);
    // $article = str_replace("&amp;","&",$article);
    return $article;
}
function verification($string)
{
    // require './model/inscription.php';// je récupère des fonction que j'avais déjà créé
    // encodage($string);
    // controlSQL($string); 
    // controlHTML($string);
    return $string;
}

function postTrend()
{
    if (isset($_POST["titre"]) && isset($_POST["article"]) && isset($_POST["short_description"]) && isset($_POST["img"])) {
        require './db_connect/detection.php';
        $titre = $_POST["titre"];
        verification($titre);
        $article = $_POST["article"];
        verification($article);
        $short_description = $_POST["short_description"];
        verification($short_description);
        $date = date('Y-m-d');
        $sql_newTrend = "INSERT INTO `billet` (`id_billet`, `titre`, `article`, `id_image`, `date`, `short_description`) VALUES (NULL, '$titre', '$article', '4', '$date', '$short_description')";
        //requête préparé
        $link->query($sql_newTrend);
    }else{
        header("?error=true");
    }
}
