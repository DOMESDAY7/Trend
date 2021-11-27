<?php
function encodage($article){
    $article = str_replace("&#039;","'",$article);
    $article = str_replace("&#8217;","'",$article);
    $article = str_replace("&quot;",'"',$article);
    $article = str_replace('<br>','',$article);
    $article = str_replace('<br />','',$article);
    $article = str_replace("&lt;","<",$article);
    $article = str_replace("&gt;",">",$article);
    $article = str_replace("&amp;","&",$article);
    return $article;
}
function verification($string){
    require '../../inscription/model.php';// je récupère des fonction que j'avais déjà créé
    encodage($string);
    controlSQL($string); 
    controlHTML($string);
    return $string;
}
function postTrend(){
    require '../../db_connect/detetction.php';
    $titre=$_POST["titre"];
    verification($titre);
    $article=$_POST["article"];
    verification($article);
    $short_description=$_POST["short_description"];
    verification($short_description);
    $date=date_format(date(),"Y-m-d");
    $sql_newTrend="INSERT INTO `billet` (`id_billet`, `titre`, `article`, `id_image`, `date`, `short_description`) VALUES (NULL, '$titre', '$article', '4', '$date', '$short_description')";
    $link->query($sql_newTrend);

}