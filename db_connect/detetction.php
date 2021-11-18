<?php
if($_SERVER['SERVER_NAME']=="localhost"){
            require '../db_connect/local.php';
        }else{
            require '../db_connect/server.php';
            } ?>