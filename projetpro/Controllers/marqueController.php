<?php
session_start();
require_once '../Models/Article.php';
require_once '../Models/DataBase.php';
 
  //verif id
  if (isset($_GET['id_marques']) || !filter_input(INPUT_GET, 'id_marques', FILTER_VALIDATE_INT)) {
    header ('location: ../Controllers/accueilController.php');
    exit();
  }
       
$article = new article();


if (!$article->getMarqueById()){
echo 'Cette marque n\'existe pas encore';
   $sleep = 3;
  header('Refresh:'. $sleep .';http://'.$_SERVER['HTTP_HOST'].'/Controllers/accueilController.php');
}
else{
  
}
require_once '../Views/marque.php';