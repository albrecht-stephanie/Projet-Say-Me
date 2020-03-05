<?php
require_once '../Views/includes/header.php';
?>
<div class="container d-flex flex-wrap align-content-around">
    <!--Formulaire d'inscription-->
    <div class="row ">
        <form class="second col-lg-12 offset-1 mb-4" method="post" action="#" novalidate="">
            <div class="form2">
                <h2 class="identity">Connectes-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
                <div class="mail ml-3 mr-3">
                    <label for="email">Mail</label>
                    <input type="email" id="mail" placeholder="Dupont.daniel@gmail.com" required>
                </div>
                <div class="password ml-3 mr-3">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" required>
                </div>
                <button type="submit" class="col-8 offset-2 btn bg-success mt-2"> Se connecter</button>
            </div>
        </form>
    </div>
</div>
<?php include '../Views/includes/footer.php' ?>