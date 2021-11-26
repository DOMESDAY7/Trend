<?php
require '../db_connect/detetction.php';
if(!isset($_GET["id_billet"])){
    header('Location:../home');
}else{
    $id_billet=$_GET["id_billet"];
    echo "<script>let id_billet=".$_GET["id_billet"]."</script>"; 
}

if(!isset($_SESSION["id_user"])){
}else{
    $id_user=$_SESSION["id_user"];
    echo "<script>let id_user=".$_SESSION["id_user"]."</script>"; 
}

if (!isset($_SESSION["pseudo"])){
    $_SESSION["pseudo"]="Guest";
    }
    echo "<script>let pseudo='{$_SESSION["pseudo"]}'</script>\n";
if (!isset($_GET["com"])){
    echo "<script>let setComment=true;</script>\n";
}else{
    echo "<script>let setComment=false;</script>\n";
}
           