<?php
// protection de la page par la session auth
if(!isset($_SESSION['auth']['login'])){
    header('Location: ../Views/connexion.php');
    exit();
}
require_once '../Views/accueil.php';