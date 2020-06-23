<?php
session_start();
require_once '../Models/Article.php';
require_once '../Models/DataBase.php';

     
$article = new article();

// protection de la page par la session auth
if(isset($_SESSION['auth']['login'])){
    header('Location: ../Controllers/connexionController.php');
    exit();
}
require_once '../Views/accueil.php';