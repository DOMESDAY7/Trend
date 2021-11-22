<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require '../component/head.php'; ?>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../component/Burger/style.css">
    <title>Home</title>
</head>
<body>
    <?php require '../db_connect/detetction.php'; 
    $sql="SELECT short_description , id_image , date , titre  FROM billet ORDER BY date DESC ";
    $req=$link -> query($sql);
    $cpt=0;
    ?>
    
    <main>
    <h3 class="titleTrends">Last trends</h3>
        <div class="lasTrends">
            
                <div class="containerLT">
                        
                    <?php while(($data=$req -> fetch()) && ($cpt<3)){ ?>
                        <?php $date=date_create($data["date"]) ?>
                        
                        <div class="exTrend1">
                            <div class="textsTrend">
                            <!-- pour le hashtag on va mettre le lien de l'article -->
                                <h1><span id="hashtag">#</span> <?php echo $data["titre"]; ?> </h1> 
                                <p class="description"> <?php echo $data["short_description"]; ?></p>
                                <p class="date"><?php echo date_format($date,'d.M.Y') ; ?></p>
                            </div>
                            <div class="imgTrend">
                                <img src="../img/pc.jpg" alt="">
                            </div>
                        </div>
                    <?php $cpt++; } ?>
                        <a href="#">I want to see more</a>
                </div>
                
        </div>
        <div class="archivesHome">
            <a href="#" class="linkArchives">
                    <div class="word">ARCHIVES</div>
            </a>
        </div>
    </main>


    
<?php
    include "../component/Burger/index.php";
?>

    <script src="../component/Burger/java.js"></script>
</body>
</html>
