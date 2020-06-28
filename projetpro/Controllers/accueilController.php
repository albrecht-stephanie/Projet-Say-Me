<?php
session_start();
require_once '../Models/Article.php';
require_once '../Models/DataBase.php';

     
$article = new article();
/*$views = new Views();
//verication si il existe un ou des avis pour cet article si oui affichage sinon message erreur*/
$oneArticle->id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); 
/*$allViews = $views->getAll();
//if($allViews == 0){
 //   $error;
//}
//else{
//$success = true;
//}*/

require_once '../Views/accueil.php';