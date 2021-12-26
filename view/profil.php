<?php session_start() ?>
<body>
    <main>
        <section class="infos">
            <p class="pp"></p>
            <p class="blah"> 
                <?php 
                if  (!isset($_SESSION["pseudo"])|| $_SESSION["pseudo"]=="Guest"){ ?>
                You are not connected
            <?php }else{ ?>
                <?= $_SESSION["pseudo"]; ?> </p>
                <p class="blah"> <?=  $_SESSION["mail"]; ?></p>
           <?php } ?> 
           
        </section>

        <a href="?page=logOut" class="logOut"> Log out </a>
    </main>
    


<?php
    require './view/components/Burger/index.php';
?>

<script src="./view/components/Burger/java.js"></script>
</body>
</html>
