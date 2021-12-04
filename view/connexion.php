
<body>
    
    <form method="POST">
        <span class="content_bj">
            <h1 class=bjPseudo>Hello &nbsp</h1>
            <h1 class="titlePseudo">,</h1>
        </span>
        <img src="./public/img/profil.svg" alt="" class="profil">
        <input type="text" name="pseudo"  placeholder="Pseudo" class="pseudo" required="require">
        <input type="password" name="mdp"  placeholder="Mot de passe" class="mdp" required="require"  id="current-password">
        <?php
       if (isset($_GET["error"])){ ?>
      <span class="message">Your identifiers are not correct 🤔</span><br>
   <?php }else{ ?>
    <span class="message"></span><br>
  <?php }
    ?>
        
        <button type="submit" name="sub">Se connecter</button>
    </form>
    <?php
    connection();
    ?>
    <article>No account ?<a href="?page=inscription"> <b>Sign up now</b></a></article>
    <script src="./public/js/connexion.js"></script>
</body>

</html>