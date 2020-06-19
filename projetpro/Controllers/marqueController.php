<?php
session_start();
require_once '../Models/Article.php';
require_once '../Models/DataBase.php';
    
$oneMarque = new Article();
//verif id
$oneMarque->id_marques = filter_input(INPUT_GET, 'id_marques', FILTER_VALIDATE_INT); 
$MarqueList = $oneMarque-> getMarqueById();

//if (!$article->getMarqueById()){
//echo 'Cette marque n\'existe pas encore';
 //  $sleep = 3;
 // header('Refresh:'. $sleep .';http://'.$_SERVER['HTTP_HOST'].'/Controllers/accueilController.php');
//}
//else{
  
//}
$success = true;
require_once '../Views/marque.php';