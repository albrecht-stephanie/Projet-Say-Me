<?php
session_start();
// protection de la page par la session auth
if($_SESSION['auth']['admin'] != 3){
    header('Location: ../Controllers/accueilController.php');
    exit();
 }

require_once '../Models/User.php';
require_once '../Models/Avis.php';
require_once '../Models/DataBase.php';

//on vérifie que l'utilisateur a les droits d'administrateur

$view = new View();

//$user= $users->id_catusers;
// protection de la page par la session auth

 $title = $textView = $note = $publishDate = '';
 $errors = [];

 $textRegex = '/\w+/';
 $noteRegex = '/d{2}\/\d{2}/';

//On vérifie si le formulaire de mise à jour a été posté (POST)
if (count($errors) == 0) {
    $view->title = $title;
    $view->textView = $textView;
    $view->note = $note;
    if (!$view->update()) {
        require_once '../Views/errors/503.php';
        exit();
    }
   // $success = true;
   // $sleep = 4;
  // header('Refresh:' . $sleep . ';http://'.$_SERVER['HTTP_HOST'].'/Controllers/adminController.php');
    }

    require_once '../Views/admin.php';