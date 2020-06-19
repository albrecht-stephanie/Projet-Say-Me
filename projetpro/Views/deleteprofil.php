<?php
require_once '../Views/includes/header.php';
require_once '../Views/includes/nav.php';
if ($_SESSION['deleteUser']['success']){
   ?>
<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
            <p class="alert alert-success text-center">Le profil a été supprimé !</p>
        </div>
    </div>
</div>

<?php 
}
else{

    ?>
<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
            <p class="alert alert-success text-center">Erreur: Le profil n'a pas pu etre supprimé.</p>
        </div>
    </div>
</div>

<?php 

}

require_once '../Views/includes/footer.php';
?>