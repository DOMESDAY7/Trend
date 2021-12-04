<body>
        <form action="?page=v" method="POST" id="inscription">
            <img src="./public/img/profil.svg" alt="">
                <input type="text" name="pseudo" id="username" placeholder="Username" require>
                <input type="email" name="mail" id="mail" placeholder="@Mail✉️" require>
                <input type="password" name="mdp" id="mdp" placeholder="Password🔑" require>
                <input type="password" name="comfirm" id="comfirm" placeholder="Comfirmation" require>
                <span class="message"></span>
        </form>
        <button class="subButton">S'inscrire</button>
        <script src="./public/js/inscription.js"></script>
</body>
</html>