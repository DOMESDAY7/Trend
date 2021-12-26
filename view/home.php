<?php session_start() ?>

<body>

    <?php if (!isset($_SESSION["pseudo"])){
        $pseudo="Guest";
    }else{
        $pseudo=$_SESSION["pseudo"];
    } ?>

    <main>
    <h3 class="titleTrends">Last trends</h3>
        <div class="lasTrends">
                <div class="containerLT">
                    <?= lastThree(); ?>
                        <a href="?page=archives" class="more">I want to see more</a>
                </div>
                
        </div>
        
        <div class="containerHello">
            <p class="hello">Hello <?php echo $pseudo ?></p>
        </div>
    </main>


    
<?php
    
    require './view/components/Burger/index.php';
?>

    <script src="./view/components/Burger/java.js"></script>
</body>
</html>
