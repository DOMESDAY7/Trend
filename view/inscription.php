<body>
        <h1 class="title"><span id="T">T</span>ren<span id="d">d</span></h1>
        <form action="?page=v" method="POST" id="inscription">
            <img src="./public/img/profil.svg" alt="">
                <input type="text" name="pseudo" id="username" placeholder="Username" require>
                <input type="email" name="mail" id="mail" placeholder="E-mail address" require>
                <input type="password" name="mdp" id="mdp" placeholder="Password" require>
                <input type="password" name="comfirm" id="comfirm" placeholder="Confirm your password" require>
                <button type="submit" class="subButton">Sign up</button>
                <span class="message"></span>
        </form>

        <script src="./public/js/inscription.js"></script>
</body>
</html>