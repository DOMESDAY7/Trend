<?php session_start() ?>


<body>
    <main>
        <?php if (!isset($_SESSION["pseudo"])){
            header('Location:?page=home');
        } ?>
        <h1>Goodbye <?php echo $_SESSION["pseudo"]; ?>👋 </h1>
        <a href="?page=home">Back to home</a>
    </main>
    <?php
    session_destroy()
    ?>
    
    
   
</body>
</html>