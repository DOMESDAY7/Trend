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
        $picFile = "./public/img/trendPic";
        $tmp_file = $_FILES['userfile']['tmp_name'];
        var_dump($tmp_file);
        print_r($_FILES);
        if (!is_uploaded_file($tmp_file)){
            echo "Un problème est survenu"; 
        }else{
            echo "le fichier est uplodé",
            $name = basename($_FILES['img']['tmp_name']);
            if (pathinfo($tmp_file,PATHINFO_EXTENSION)=="jpg"){ // vérification si le fichier est un fichier jpg
                move_uploaded_file($tmp_file,"$picFile/$name");
                echo "le fichier à été déplacé";
            }
        }
        $sql_newTrend = "INSERT INTO `billet` (`id_billet`, `titre`, `article`, `imgName`, `date`, `short_description`) VALUES (NULL, '$titre', '$article', '$name', '$date', '$short_description')";
        //requête préparé
        $link->query($sql_newTrend);
    }else{
        header("?error=true");
    }
}
