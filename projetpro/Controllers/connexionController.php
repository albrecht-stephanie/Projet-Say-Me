<?php
session_start();
require_once '../Models/User.php';
require_once '../Models/DataBase.php';

$id_catuser = '0';
$email = $password = '';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
     
    if (empty($email) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['login'] = 'Le mail est invalide !';
    }
    $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
    if (count($errors) == 0) {
        $users = new users();
        
        try {
                // vérification que l'identifiant mail existe
                $users->email = $email;
                if ($users->checkEmail()) {  
                    $users->getOne();
                    // controle du mot de passe, si ok, on charge le profil
                    if (password_verify($password, $users->password)) {
                        $_SESSION['auth']['login'] = true;
                        $_SESSION['auth']['id'] = $users->id;
                        $_SESSION['auth']['lastname'] = $users->lastname;
                        $_SESSION['auth']['firstname'] = $users->firstname;
                        header('Location:../Controllers/accueilController.php');
                        exit();
                    } else {
                        $errors['login'] = 'l\'identifiant ou le mot de passe est incorrect !';
                    }
                } else {
                    $errors['login'] = 'l\'identifiant ou le mot de passe est incorrect !';
                }
        } catch (PDOException $ex) {
            $errors['login'] = 'Il y a eu un problème lors de la connexion à votre compte !';
        }
    }
}



require_once '../Views/connexion.php';
