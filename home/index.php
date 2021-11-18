<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../component/Burger/style.css">
    <!-- Montserrat font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Overpass font -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600;700&display=swap" rel="stylesheet">
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
        <div class="archivesHome"></div>
    </main>


    
<?php
    include "../component/Burger/index.php";
?>

    <script src="../component/Burger/java.js"></script>
</body>
</html>
