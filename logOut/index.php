<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php require '../component/head.php';?>
        <title>Log Out</title>
        <link rel="stylesheet" href="styleLogOut.css">
    </head>

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