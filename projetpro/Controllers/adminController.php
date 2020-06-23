<?php
session_start();

if($id_catuser == 3 AND count($errors) == 0) {
    header('Location:../Controllers/accueilController.php');
 
}
require_once '../Models/Avis.php';
require_once '../Models/DataBase.php';

 $title = $textView= $note = $publishDate = '';
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