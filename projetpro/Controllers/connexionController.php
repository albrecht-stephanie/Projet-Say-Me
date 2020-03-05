<?php
require_once '../Models/User.php';

 if(isset($_POST['checkmail'])){
      $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
     if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
         $users = new users();
         $users->email = $email;
         if($users->checkEmail()){
             exit('notOk');
         }
         exit('ok');
     }
     // mettre erreur : l'email ou le mot de passe de correspond pas
     // mettre mot de passe oublié
     //faire le redirection avec sleep suite à l'inscription
 }
require_once '../Views/connexion.php';
