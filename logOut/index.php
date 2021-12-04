<?php session_start() ?>


<body>
    <main>
        <?php if (!isset($_SESSION["pseudo"])){
            header('Location:../home');
        } ?>
        <h1>Goodbye <?php echo $_SESSION["pseudo"]; ?>👋 </h1>
    </main>
    <?php
    session_destroy()
    ?>
    
    
   
</body>
</html>