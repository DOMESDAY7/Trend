<!DOCTYPE html>
<html lang="en">
<head>
    <?php require '../component/head.php';?>
    <title> Trend - Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <form action="./v.php" method="POST" id="inscription">
            <img src="../img/profil.svg" alt="">
                <input type="text" name="pseudo" id="username" placeholder="Username" require>
                <input type="email" name="mail" id="mail" placeholder="@Mail✉️" require>
                <input type="password" name="mdp" id="mdp" placeholder="Password🔑" require>
                <input type="password" name="comfirm" id="comfirm" placeholder="Comfirmation" require>
                <span class="message"></span>
                
        </form>
        <button class="subButton">S'inscrire</button>

        <!-- vérification des deux mots de passe en js -->
        <script src="script.js"></script>
</body>
</html>