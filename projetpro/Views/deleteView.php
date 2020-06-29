<?php
require_once '../Views/includes/header.php';
if($success= true){?>
<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
            <p class="alert alert-success text-center">L'avis a été supprimé !</p>
        </div>
    </div>
<?php } else {?>
    <div class="row">
        <div class="form col-6 offset-3">
            <p class="alert alert-success text-center">Erreur: L'avis' n'a pu être supprimé.</p>
        </div>
    </div>
<?php } 

require_once '../Views/includes/footer.php';
?>