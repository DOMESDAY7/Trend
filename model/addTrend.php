<?php


function postTrend()
{
    if (isset($_POST["titre"]) && isset($_POST["article"]) && isset($_POST["short_description"]) ) { //!erreur de champs
        try {
            $titre = htmlspecialchars($_POST["titre"]);
            $article = htmlspecialchars($_POST["article"]);

            $finalDir = "./public/img/trendPic";
            if (is_uploaded_file($_FILES["imgTrend"]["tmp_name"])) {
                $format = array("jpg", "jpeg");
                $fileExt = pathinfo(basename($_FILES["imgTrend"]["name"]), PATHINFO_EXTENSION);

                if ($_FILES["imgTrend"]["size"] > 1000000) {
                    header("Location:?page=adminPannel&back=addTrend&error=weight"); //!erreur de poid
                    die;
                } else if (!in_array($fileExt, $format)) {
                    header("Location:?page=adminPannel&back=addTrend&error=fileExt"); //!erreur de type de fichier
                    die;
                }
                $tmp_name = $_FILES["imgTrend"]["tmp_name"];
                $name = basename($_FILES["imgTrend"]["name"]);
                $name = htmlspecialchars($name);
                move_uploaded_file($tmp_name, "$finalDir/$name");
                $imgName = basename($_FILES["imgTrend"]["name"]);
                str_replace(" ", "", $imgName);
                $date = date('Y-m-d');
                $date = htmlspecialchars($date);
                $short_description = htmlspecialchars($_POST["short_description"]);
                require "./db_connect/detection.php";
                $sqlNewTrend = "INSERT INTO `billet` (`id_billet`, `titre`, `article`, `imgName`, `date`, `short_description`) VALUES (NULL, '$titre', '$article', '$imgName', '$date', '$short_description')";
                 $link->query($sqlNewTrend);
                 header("Location:?page=adminPannel&back=addTrend&send=true");
            } else {
                echo "not possible";
            }
        } catch (Exception $e) {
            echo $e;
        }
    } else {
        header("Location:?page=adminPannel&back=addTrend&error=notComplete");
        die;
    }
}
