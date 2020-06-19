<?php
session_start();
require_once '../Models/Article.php';
require_once '../Models/DataBase.php';
 
  
  
$oneCat = new Article();
//verif id
$oneCat->id_categories = filter_input(INPUT_GET, 'id_categories', FILTER_VALIDATE_INT); 
$CatList = $oneCat-> getCatById();

//if (!$article->getCathById()){
//echo 'Cette catégorie n\'existe pas encore';
   //$sleep = 3;
  //header('Refresh:'. $sleep .';http://'.$_SERVER['HTTP_HOST'].'/Controllers/accueilController.php');
//}
//else{
  
//}
$success = true;
require_once '../Views/categorie.php';