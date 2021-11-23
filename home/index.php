<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require '../component/head.php' ?>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../component/Burger/style.css">
    <title>Home</title>
</head>
<body> 
    <main>
    <h3 class="titleTrends">Last trends</h3>
        <div class="lasTrends">
            
                <div class="containerLT">
                        
                    <?php require './model.php'; 
                    lastThree();
                    ?>
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
    
    require '../component/Burger/index.php';
?>

    <script src="../component/Burger/java.js"></script>
</body>
</html>
