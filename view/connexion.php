
<body>
    <h1 class="title"><span id="T">T</span>ren<span id="d">d</span></h1>
    <form method="POST">
        <div class="content_bj">
            <h1 class=bjPseudo>Hello &nbsp</h1>
            <h1 class="titlePseudo"></h1>
        </div>
        <img src="./public/img/profil.svg" alt="" class="profil">
        <input type="text" name="pseudo"  placeholder="Pseudo" class="pseudo" required="require">
        <input type="password" name="mdp"  placeholder="Password" class="mdp" required="require"  id="current-password">
        
        <?php
            if (isset($_GET["error"])){ ?>
            <span class="message">Your username or password is incorrect 🤔</span><br>
        <?php }else{ ?>
            <span class="message"></span><br>
        <?php }?>
        
        <button type="submit" name="sub">Sign in</button>
        <article>No account ? <a href="?page=inscription" class="bold"> Sign up now</a></article>
    </form>

    <?php connection(); ?>

    <script src="./public/js/connexion.js"></script>
</body>

</html>