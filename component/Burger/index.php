<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../component/Burger/style.css">
    <!-- Montserrat font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Overpass font -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600;700&display=swap" rel="stylesheet">
    <title>Burger - don't touch</title>
</head>
<body>
    <?php if (!isset($_SESSION["pseudo"])){
        $pseudo="Guest";
    }
    else{
        $pseudo=$_SESSION["pseudo"];
    } ?>
    <section class="content_head">
    <div class="rondBurger"></div>
    <h3 class="pseudo"><?php echo $pseudo; ?></h3>
    </section >
    <div class="burger">
        <div class="containerTitles">
            <a href="" class="home">HOME</a><br>
            <a href="" class="archives">ARCHIVES</a><br>
            <a href="" class="profile">PROFILE</a>
            <br>
            <span><a href="../../logOut/index.php" class="logOut">Log out</a></span>
        </div>
        
        <a href="" class="explain"> Where am I ?</a>
    </div>
    
    <div class="burgerBG"></div>

    <script src="../../component/Burger/java.js"></script>
</body>
</html>