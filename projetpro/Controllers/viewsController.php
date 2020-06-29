<?php
session_start();
require_once '../Models/Avis.php';
require_once '../Models/Article.php';
require_once '../Models/User.php';
require_once '../Models/DataBase.php';
/** acces article */
$article = new article();
$article->id = filter_input(INPUT_GET, 'article', FILTER_VALIDATE_INT); 
$article->getOneById();

/** access Avis */
$views = new View();

//verication si il existe un ou des avis pour cet article si oui affichage sinon message erreur
$views->id_articles = filter_input(INPUT_GET, 'article', FILTER_VALIDATE_INT); 

$allViews = $views->getAll();

if($allViews == 0){
    $error;
}
else{
    $success = true;
}

require_once '../Views/views.php';