<?php
session_start();

// protection de la page par la session auth
if(!isset($_SESSION['auth']['login'])){
    header('Location: ../Controllers/accueilController.php');
    exit();
}
require_once '../Views/accueil.php';