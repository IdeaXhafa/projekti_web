<?php

function checkAuth(){
    session_start();

    if(!isset($_SESSION['logged_in_user'])){
        header("Location: http://localhost/Projekti_web_php/login.php");
    }
}

function checkAdmin(){
    session_start();
    
    if(!isset($_SESSION['logged_in_user'])){
        header("Location: http://localhost/Projekti_web_php/login.php");
    }

    if($_SESSION['logged_in_user'] !== "admin"){
        header("Location: http://localhost/Projekti_web_php/hoome.php");
    }
}
