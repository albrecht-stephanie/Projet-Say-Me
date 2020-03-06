<?php
session_start();
require_once '../Models/User.php';
require_once '../Models/DataBase.php';
$firstname = $lastname = $major = $email = $password = $password_confirmation = $conditions = '';
$errors = [];
$nameRegex = '/\w+/';
$passwordRegex = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])?[\w!@#$%^&*]{8,}$/';

//On crée un nouveau patient
$users = new users();
$users->id = $id;
//On vérifie si le formulaire de mise à jour a été posté (POST)
if ($isSubmitted && count($errors) == 0) {
    $users->firstname = $firstname;
    $users->lastname = $lastname;
    $users->mail = $mail;
    $users->password = $password;
    if (!$users->update()) {
        require_once '../Views/errors/503.php';
        exit();
    }
    $success = true;
    $sleep = 4;
    header('Refresh:' . $sleep . ';http://projetpro/Controllers/updateprofilController.php?idPatient='. $users->id);
}

require_once '../Views/updateprofil.php';
