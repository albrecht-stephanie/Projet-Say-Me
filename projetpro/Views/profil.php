<?php
session_start();
require_once '../Views/includes/header.php'
?>
<div class="container">
    <div class="row col-lg-10 offset-2">
        <div class="card">
            <div class="card-header bg-info ">
                <h2>Mon Profil</h2>
            </div>
            <div class="card-body">
                <ul>
                    <li>Nom:<?= $users->lastname ?></li>
                    <li>Prénom:<?= $users->firstname ?></li>
                    <li>Email:<?= $users->email ?></li>
                    <li>Mes avis: </li>
                </ul>
                <a href="../Views/updateprofil.php" class="btn btn-info">Modifier</a>
                <a href="../Controllers/deleteprofil.php" class="btn btn-danger">Supprimer mon profil</a>
            </div>
        </div>
    </div>
</div>

