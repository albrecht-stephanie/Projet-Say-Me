<?php
require_once '../Views/includes/header.php';
?>
<div class="container">
    <div class="row">
        <h2 class="admin mt-3">Adimistrateur <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
    <!--Formulaire authentification administrateur-->    
        <form class="second col-lg-6 offset-3" method="post" action="#" novalidate="">
            <div class="form-group row mail ml-3 mr-3 mt-3">
                <label for="email" class="col-auto col-form-label col-form-label-sm">Mail</label>
                    <input type="email" class="form-control form-control-sm" id="mail" name="email" placeholder="Dupont.daniel@gmail.com" required>
                        <?php if (isset($errors['login'])){ ?> <span class="text-danger"><?= $errors['login'] ?></span><?php } ?>
                    </div>
             <div class="form-group row password ml-3 mr-3 mb-3">
                <label for="password" class="col-auto col-form-label col-form-label-sm">Mot de passe</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                    <?php if (isset($errors['password'])){ ?><span class="text-danger"><?= $errors['password'] ?></span><?php } ?>
            </div>
            
        <button type="submit" class="col-6 offset-3 btn btn-info mt-2 mb-3"> Se connecter</button>
      </form>  
    </div>
</div>
<?php include '../Views/includes/footer.php' ?>