<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<?php require '../component/head.php'; ?>
<script>
    let link=document.createElement('link').setAttribute('rel','stylesheet')
    link.setAttribute('href',"style.css")
    document.getElementsByTagName('head').appendChild(link) 
    </script>
<body>
    <main>
        <?php if (!isset($_SESSION["pseudo"])){
            header('Location:../home');
        } ?>
    <h1>Au revoir <?php echo $_SESSION["pseudo"]; ?> </h1>
    </main>
    <?php
    session_destroy()
    ?>
    
    
   
</body>
</html>