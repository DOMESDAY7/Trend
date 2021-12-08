<body>
    <main>

        <a href=""><span class="hashtag">#</span> Add a trend</a>
        <a href=""><span class="hashtag">#</span> Modify a trend</a>
        <a href=""><span class="hashtag">#</span> Manage comments</a>
        <a href=""><span class="hashtag">#</span> Manage users</a>

    </main>
    <?php $sql="SELECT pseudo login" ?>
    <h3 class="title_trend">Last trend</h3>
    <section class="last_trend">
        <?php showTrend(); ?>
    </section>
<!-- faire un rowCount()pour compter le nb de com -->
    <h3 class="title_user"> Last user</h3>
    <section class="last_user">
        <?php 
        showUsers();
        ?>
        

    </section>
</body>

</html>