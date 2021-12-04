<!DOCTYPE html>
<html lang="en">
<head>
    <!-- gros pb au niveau du chemin ici -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/trend/component/head.php'; ?>
    <link rel="stylesheet" href="../Burger/style.css">
    
    <title>Burger - don't touch</title>
</head>
<body>
    <?php if (!isset($_SESSION["pseudo"])){
        $pseudo="Guest";
    }
    else{
        $pseudo=$_SESSION["pseudo"];
    } ?>

    <!-- Content Head -->
    <section class="content_head">
        <!-- logo à mettre iciii -->
        <h1 class="logoProvisoire"> <span id="T">T</span>ren<span id="d">d</span> </h1>
        <div class="rondBurger"></div>
        <h3 class="pseudo"><?php echo $pseudo; ?></h3>
    </section >


    <!-- Burger -->
    <nav class="burger">
        <div class="containerTitles">
            <a href="../home/index.php" class="home">HOME</a><br>
            <a href="../archives/index.php" class="archives">ARCHIVES</a><br>
            <a href="#" class="profile">PROFILE</a>
            <br>
            <span><a href="../logOut" class="logOut">Log out</a></span>
        </div>
        <a href="#" class="explain"> Where am I ?</a>
    </nav>
    
    <div class="burgerBG"></div>

    <script src="https://localhost/Trend/component/Burger/java.js"></script>
</body>
</html>