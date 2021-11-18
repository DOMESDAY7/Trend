
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log out</title>
</head>
<body>
    <main>
    <h1>Au revoir <?php echo $_SESSION["pseudo"]; ?> </h1>
    </main>
    <?php
    session_destroy()
    ?>
    
</body>
</html>