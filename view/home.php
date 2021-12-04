<?php session_start() ?>

<body> 
    <main>
    <h3 class="titleTrends">Last trends</h3>
        <div class="lasTrends">
            
                <div class="containerLT">
                        
                    <?= lastThree(); ?>
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
