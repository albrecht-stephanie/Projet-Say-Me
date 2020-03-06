<?php

if(isset($_SESSION['auth'])){
    $_SESSION['auth'] = [];
    session_destroy();
    header('Location:../Views/accueil.php');
    exit();
}