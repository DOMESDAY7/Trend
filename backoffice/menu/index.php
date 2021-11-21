<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back office reception</title>
    <link rel="stylesheet" href="style.css">
    <!-- Montserrat font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Overpass font -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@100;300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
     require '../../db_connect/detetction.php';
     $sql="SELECT * FROM utilisateurs , billet ";
     $req=$link->query($sql);
    ?>
    <main>

        <a href=""><span class="hashtag">#</span> Add a trend</a>
        <a href=""><span class="hashtag">#</span> Modify a trend</a>
        <a href=""><span class="hashtag">#</span> Manage comments</a>
        <a href=""><span class="hashtag">#</span> Manage users</a>

    </main>
    <?php $sql="SELECT pseudo login" ?>
    <h3 class="title_trend">Last trend</h3>
    <section class="last_trend">
        <?php while ($data_trend = $req->fetch()){ ?>
        <a href="" class="link_trend">
            <span class="trend">
            <h3 class="titre"><span class="hashtag">#</span>
                This is a trend</h3>
                <h5 class="date">01.dec.2021</h5>
                <h5 class="nb_comments">number of comments:</h5>
                <h5 class="nb">10</h5>
                
                  <img src="../../img/pc.jpg" alt="">
            </span>
        </a>
        <?php } ?>
    </section>

    <h3 class="title_user"> Last user</h3>
    <section class="last_user">
        <?php while ($data_user = $req->fetch()){ ?>
        <a href="" class="link_user">
            <span class="user">
                <h3 class="pseudo">User</h3>
                <h3 class="pseudo">test@test</h3>
                <h5 class="since"> Active since 10.dec.2021</h5>
                <div class="user_img"></div>
            </span>
        </a>
        <?php } ?>

    </section>
</body>

</html>