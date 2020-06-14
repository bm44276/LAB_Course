<?php
    session_start();

    if(is_null($_SESSION['Custom'])){
        header("location:costum.html");
    }else{
        header("location:displayCustom.php");
    } 