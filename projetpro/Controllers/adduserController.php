<?php
session_start();
require_once '../Models/User.php';
require_once '../Models/DataBase.php';
$firstname = $lastname = $major = $email = $password = $password_confirmation = $conditions = '';
$errors = [];

$nameRegex = '/\w+/';
$passwordRegex = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])?[\w!@#$%^&*]{8,}$/';

if (isset($_POST['checkmail'])) {
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $users = new users();
        $users->email = $email;
        if ($users->checkEmail()) {
            exit('noOk');
        }
        exit('ok');
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmit = true;

    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
    if (empty($firstname) || !preg_match($nameRegex, $firstname)) {
        $errors['firstname'] = 'Le prénom est invalide !';
    }
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    if (empty($lastname) || !preg_match($nameRegex, $lastname)) {
        $errors['lastname'] = 'Le nom est invalide !';
    }

    if (!isset($_POST['major'])) {
        $errors['major'] = 'Merci de cocher la case. Vous devez être majeur pour vous inscrire!';
    }

    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (empty($email) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Le mail est invalide !';
    }

    $password = trim($_POST['password']);
    if (empty($password) || !preg_match($passwordRegex, $password)) {
        $errors['password'] = 'Le mot de passe doit comporter au moins 8 caractères !';
    }
    $password_confirmation = trim($_POST['password_confirmation']);
    if (empty($password) || $password != $password_confirmation) {
        $errors['password_confirmation'] = 'Les mots de passe sont differents !';
    }
    if (!isset($_POST['conditions'])) {
        $errors['conditions'] = 'Veuillez accepter les conditions d\'utilisation !';
    }

    if (count($errors) == 0) {
        $users = new users($firstname, $lastname, $email, password_hash($password, PASSWORD_BCRYPT));

        try {
            $users->create();
            $success = true;
            $sleep = 4;
            header('Refresh:' . $sleep . ';http://'.$_SERVER['HTTP_HOST'].'/Controllers/connexionController.php?id=');
        } catch (PDOException $ex) {
            echo 'La création du compte a échouée !' . $ex->getMessage();
            die();
        }
    }
}


require_once '../Views/adduser.php';
