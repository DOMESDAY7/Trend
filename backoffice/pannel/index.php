<!DOCTYPE html>
<html lang="en">

<head>
    <?php require '../../component/head.php'; ?>
    <title>Back office reception</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
    <?php
     require '../../db_connect/detetction.php';
     $sql_trend="SELECT * FROM billet ";
     $req=$link->query($sql_trend);
    
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
        <?php  $cpt_trend=0; ?>
        <?php while (($data_trend = $req->fetch(PDO::FETCH_ASSOC)) && ($cpt_trend<5)){ ?>
        <a href="" class="link_trend">
            <span class="trend">
            <h3 class="titre"><span class="hashtag">#</span>
                <?php echo $data_trend["titre"]; ?></h3>
                <h5 class="date"><?php echo $data_trend["date"]; ?></h5>
                <h5 class="nb_comments">number of comments:</h5>
                <h5 class="nb">10</h5>
                
                  <img src="<?php echo $data_trend["id_image"];"" ?>" alt="">
            </span>
        </a>
        <?php $cpt_trend++; } ?>
    </section>
<!-- faire un rowCount()pour compter le nb de com -->
    <h3 class="title_user"> Last user</h3>
    <section class="last_user">
        <?php $sql_user="SELECT * FROM utilisateurs";
        $req_utilisateur=$link->query($sql_user);
        ?>
        <?php $cpt_user=0; ?>
        <?php while (($data_user = $req_utilisateur->fetch(PDO::FETCH_ASSOC)) && ($cpt_user<10)){ ?>
        <a href="" class="link_user">
            <span class="user">
                <h3 class="pseudo"><?php echo $data_user["pseudo"]; ?></h3>
                <h3 class="pseudo"><?php echo $data_user["login"]; ?></h3>
                <?php if (!isset($data_user["creation_date"])){
                    ?>
                    <h5 class="since">no date it's admin</h5>
                    <?php }else{ ?>
                <h5 class="since"> Active since <?php echo $data_user["creation_date"]; ?></h5>
                    <?php }; ?>
                <div class="user_img"></div>
            </span>
        </a>
        <?php $cpt_user++; } ?>

    </section>
</body>

</html>