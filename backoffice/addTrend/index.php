<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Trend</title>
</head>
<body>
    <?php 
    require '../../db_connect/detetction.php';

    $titre=$_POST["titre"];
    $article=$_POST["article"];
    //au cas ou si y a des caractère énervant
    $article = str_replace("&#039;","'",$article);
    $article = str_replace("&#8217;","'",$article);
    $article = str_replace("&quot;",'"',$article);
    $article = str_replace('<br>','',$article);
    $article = str_replace('<br />','',$article);
    $article = str_replace("&lt;","<",$article);
    $article = str_replace("&gt;",">",$article);
    $article = str_replace("&amp;","&",$article);
    $short_description=$_POST["short_description"];
    $sql_newTrend="INSERT INTO `billet` (`id_billet`, `titre`, `article`, `id_image`, `date`, `short_description`) VALUES (NULL, '$titre', '$article', '4', '2021-11-01', '$short_description')";
    $link->prepare($sql_newTrend);
    require '../../inscription/model.php';
    $article=controlSQL($article);
    

    
    
    ?>
    <form method="POST">
    <input type="text" name="titre" id="name">
    <input type="text" name="article" id="article">
    <input type="file" name="img" id="img">
    <input type="text" name="short_description" id="short_description">
    <button type="submit"></button>


    </form>
</body>
</html>