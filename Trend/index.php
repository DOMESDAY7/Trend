<?php session_start()?>
<?php require '../db_connect/detetction.php';?>
<?php
        if(!isset($_GET["id_billet"])){
            header('Location:../home');
        }else{
            $id_billet=$_GET["id_billet"];
        }
       
        if(!isset($_SESSION["id_user"])){
        }
        $id_user=$_SESSION["id_user"];
        $sql_trend="SELECT * FROM billet WHERE id_billet='$id_billet' ";
        $req_trend=$link->query($sql_trend);
        $data_trend=$req_trend->fetch(PDO::FETCH_ASSOC);
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
        <link rel="stylesheet" href="../component/Burger/style.css">
        <link rel="stylesheet" href="style.css">
    <!-- Montserrat font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Overpass font -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;600;700&display=swap" rel="stylesheet">
    <title>TREND -<?php echo $data_trend["titre"]; ?></title>
</head>
<body>
<!-- ?php  -->
    <!-- if(!isset($_GET["id_user"])){ -->
        <!-- //peut pas commenter -->
    <!-- } -->
<!-- ?> -->

    <!-- Trend -->
    <div class="containerTrend">
        <!-- Infos -->
        <div class="infos">
            <div class="titre">
                <span id="hashtag">#</span><h1> This is a Trend. </h1>
            </div>
            <div class="proprio">
                <p>Trend's Master</p>
                <div class="pp"></div>
            </div>
        </div>

        <!-- Image -->
        <div class="imgtrend2">
            <img src="../img/pc2.jpg" alt="">
        </div>
        

        <!-- Texte -->
        <div class="texTrend">  
            <p class="texts"> <?php echo $data_trend["article"]; ?> </p>
            <p class="date"> <?php echo $data_trend["date"]; ?> </p>
        </div>

        <!-- Boutons utilitaires -->
        <div class="utilities">
            <div class="SHcomments">
                <div class="svg">
                    <!-- mettre l'id de l'image ici -->
                    <img src="../img/eyeOpen.svg" alt="" class="eye">
                </div>
                <p class="p"> Show comments </p>
            </div>
            <div class="putComment">
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.45 27C9.09196 27 8.74858 26.8578 8.49541 26.6046C8.24223 26.3514 8.1 26.008 8.1 25.65V21.6H2.7C1.98392 21.6 1.29716 21.3155 0.790812 20.8092C0.284463 20.3028 0 19.6161 0 18.9V2.7C0 1.98392 0.284463 1.29716 0.790812 0.790812C1.29716 0.284463 1.98392 0 2.7 0H24.3C25.0161 0 25.7028 0.284463 26.2092 0.790812C26.7155 1.29716 27 1.98392 27 2.7V18.9C27 19.6161 26.7155 20.3028 26.2092 20.8092C25.7028 21.3155 25.0161 21.6 24.3 21.6H16.065L11.07 26.6085C10.8 26.865 10.4625 27 10.125 27H9.45ZM10.8 18.9V23.058L14.958 18.9H24.3V2.7H2.7V18.9H10.8ZM5.4 6.75H21.6V9.45H5.4V6.75ZM5.4 12.15H17.55V14.85H5.4V12.15Z" fill="white"/>
                </svg>
                <p>+</p>
            </div>
        </div>
    </div>

    <!-- Espace commentaires -->
    <?php
      if (!isset($_SESSION["pseudo"])){
        $_SESSION["pseudo"]="Guest";
      }
     echo "<script>let id_billet=".$_GET["id_billet"]."</script>"; 
     echo "<script>let id_user=".$_SESSION["id_user"]."</script>"; 
     echo "<script>let pseudo='{$_SESSION["pseudo"]}'</script>\n";
     if (!isset($_GET["com"])){
        echo "<script>let setComment=true;</script>\n";
     }else{
        echo "<script>let setComment=false;</script>\n";
     }
    
   
   
    
    
    $sql_com="SELECT * FROM commentaire , utilisateurs , billet WHERE id_billet='$id_billet' AND ext_utilisateur='$id_user' ORDER BY post_date DESC";
    //faire une requête préparé au cas ou il y a une injection dans l'URL
    $req=$link->query($sql_com);
     ?>
    <div class="containerComments">
        <?php while( $data = $req->fetch(PDO::FETCH_ASSOC)){
            // $date=$data["post_date"];
            ?>
        <div class="userComment" id=com<?php echo $data["id_commentaire"]; ?>>
            <span id="hashtag2"><a href="?com=show#com<?php echo $data["id_commentaire"]; ?>"> #</a></span>
            <div class="User">
                <div class="ppUser"></div>
                <p class="pseudoUser"> <?php echo $data["pseudo"]; ?> </p>
            </div>
            <p class="comment"> <?php echo $data["content"]; ?></p>
            <p class="dateUser"> <?php echo $data["post_date"] ;?> </p>
        </div>
    <?php } ?>
    
        <div class="noComments"></div>
    </div>

    <!-- Modal ajout commentaire -->
  
    <div class="BGmodal">
        <div class="croix">
            <img src="../img/croix.svg" alt="" class="svgCroix">
        </div>
        <div class="modal">
            <div class="userModal">
                <div class="ppModal"></div>
                <p class="pseudoModal"> <?php echo $_SESSION["pseudo"]; ?> </p>
            </div>
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Write a comment..."></textarea>
            <div class="BTNpost" > Let's post </div>
            <span class="message"></span>
        </div>
    </div>
        

    <!-- Retour menu -->
    <a href="../home/index.php" class="back"> 
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM25 10.5L2 10.5L2 13.5L25 13.5L25 10.5Z" fill="white"/></svg>
        <p>Back to Trend's list</p>
    </a>



<?php
    include "../component/Burger/index.php";
?>

    <script src="../component/Burger/java.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="script_comment.js"></script>
</body>
</html>
