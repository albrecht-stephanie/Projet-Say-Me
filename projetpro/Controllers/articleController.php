<?php
session_start();
require_once '../Models/Article.php';
require_once '../Models/DataBase.php';
 $idart = $_GET['id'];
  //verif id
  //if (empty($idart) || !filter_input(INPUT_GET, $idart, FILTER_VALIDATE_INT)) {
    //header ('location: ../Controllers/accueilController.php');
   // exit();
 // }
       
$oneArticle = new Article();

$oneArticle->id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$oneArticle = $oneArticle-> getOneById();

$success = true;
require_once '../Views/oneArticle.php';