<?php
session_start();
//on vérifie que l'utilisateur a les droits d'administrateur
if($_SESSION['auth']['admin'] != 3){
    header('Location: ../Controllers/accueilController.php');
    exit();
 }

require_once '../Models/User.php';
require_once '../Models/Avis.php';
require_once '../Models/DataBase.php';

/********* validation d'un article **************/
if (isset($_POST['validID'])){
    $validArticle = new View();
    $validArticle->id = filter_input(INPUT_POST, 'validID', FILTER_VALIDATE_INT);
    $validArticle->validStatus();
    $ifValidSuccess = '      
    <div class="alert alert-primary" role="alert">
    Avis validé
  </div>
    ';
}
else{
    $ifValidSuccess = '';
}
/***********************************************/
/********** suppression d'un article  **********/
if (isset($_POST['supprID'])){
    $validArticle = new View();
    $validArticle->id = filter_input(INPUT_POST, 'supprID', FILTER_VALIDATE_INT);
    $validArticle->delete();
    $ifSupprSuccess = '      
    <div class="alert alert-danger" role="alert">
    Avis supprimé
  </div>
    ';
}
else{
    $ifSupprSuccess = '';
}
/***********************************************/

/******************* Affichage des articles en attente de validation *************** */
$views = new View();
//on affiche tous les avis en status 0 (non publié et en attente de validation)
//$allValidate->id_articles= filter_input(INPUT_GET, 'id_articles', FILTER_VALIDATE_INT); 
$validate = $views->getAllValidate();
$success = true;
//on passe le status de l'avis à 1

 
require_once '../Views/admin.php';