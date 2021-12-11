<?php session_start() ?>

<body> 
    <main>
    <h3 class="titleTrends">Last trends</h3>
        <div class="lasTrends">
            
                <div class="containerLT">
                        
                    <?= lastThree(); ?>
                        <a href="#" class="more">I want to see more</a>
                </div>
                
        </div>
        <div class="archivesHome">
            <a href="#" class="word">ARCHIVES</a>
        </div>
    </main>


    
<?php
    
    require './view/components/Burger/index.php';
?>

    <script src="./view/components/Burger/java.js"></script>
</body>
</html>
