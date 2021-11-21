<?php
if($_SERVER['SERVER_NAME']=="localhost"){
            require 'local.php';
        }else{
            require 'server.php';
            } ?>