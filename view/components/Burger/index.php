<!DOCTYPE html>
<html lang="en">

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
        <a href="?page=home" class="logoProvisoire"> <span id="T">T</span>ren<span id="d">d</span> </a>
        <div class="rondBurger"></div>
        <h3 class="pseudo"><?php echo $pseudo; ?></h3>
    </section >


    <!-- Burger -->
    <nav class="burger">
        <div class="containerTitles">
            <a href="?page=home" class="home">HOME</a><br>
            <a href="?page=archives" class="archives">ARCHIVES</a><br>
            <a href="?page=profil" class="profile">PROFILE</a>
            <br>
           
            <?php if ($pseudo=="admin"){ ?>
                <br><a href="?page=adminPannel">Admin Pannel</a><br>
            <?php } ?>
            
            <span><a href="?page=logOut" class="logOut">Log out</a></span>
        </div>
        <a href="?page=where" class="explain"> Where am I ?</a>
    </nav>
    
    <div class="burgerBG"></div>

    <script src="https://localhost/Trend/component/Burger/java.js"></script>
</body>
</html>
