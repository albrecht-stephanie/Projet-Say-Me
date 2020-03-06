<?php
require_once '../Models/User.php';
require_once '../Models/DataBase.php';
$email = $password = '';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (empty($email) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['login'] = 'Le mail est invalide !';
    }
    $password = trim($_POST['password']);
    if (count($errors) == 0) {
        $users = new users();
        $users->email = $email;
        try {
            $users->getOne();
            if (password_verify($password, $users->password)) {
                $_SESSION['auth']['login'] = true;
                $_SESSION['auth']['id'] = $users->id;
                $_SESSION['auth']['lastname'] = $users->lastname;
                header('Location:../Views/accueil.php');
                exit();
            } else {
                $errors['login'] = 'l\'identifiant ou le mot de passe est incorrect !';
            }
        } catch (PDOException $ex) {
            $errors['login'] = 'Il y a eu un problème lors de la connexion à votre compte !';
        }
    }
}
require_once '../Views/connexion.php';
