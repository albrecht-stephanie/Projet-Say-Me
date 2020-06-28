<?php
require_once '../Views/includes/header.php';
?>
<div class="container">
    <!--Formulaire d'inscription-->
    <h2 class="identity">Connectes-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
    <div class="row col-lg-10 offset-3">
        <form class="second" method="post" action="#" novalidate="">
            <div class="form-group row mail ml-3 mr-3 mt-3">
                <label for="email" class="col-auto col-form-label col-form-label-sm">Mail</label>
                <input type="email" class="form-control form-control-sm" id="mail" name="email" placeholder="Dupont.daniel@gmail.com" required>
                    <?php if (isset($errors['login'])){ ?><span class="text-danger"><?= $errors['login'] ?></span><?php } ?>

            </div>
            <div class="form-group row password ml-3 mr-3 mb-3">
                <label for="password" class="col-auto col-form-label col-form-label-sm">Mot de passe</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                    <?php if (isset($errors['password'])){ ?><span class="text-danger"><?= $errors['password'] ?></span><?php } ?>
            </div>
            <button type="submit" class="col-8 offset-2 btn bg-success mt-2"> Se connecter</button>
            <a class="btn btn-warning col-8 offset-2" href="../Controllers/adduserController.php"> Ou inscris-toi !</a>

            <!--Début de la modal oublie mot de passe-->

            <button type="button" class="btn btn-link ml-5" data-toggle="modal" data-target="#updatepasswd"
                data-whatever="@mdo">Mot de passe oublié ?</button>
    </div>
    <div class="modal fade" id="updatepasswd" tabindex="-1" role="dialog" aria-labelledby="updatepasswd"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updatepasswd">Réinitialisation du mot de passe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="../Controllers/updatepwdController.php" novalidate="">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">email:</label>
                            <input type="email" class="form-control" id="new_email" name="new_email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Nouveau mot de passe:</label>
                            <input type="password" class="form-control" id="new_password" name="new_password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="col-form-label">Confirmation du mot de
                                passe:</label>
                            <input type="password" class="form-control" id="password_confirmation">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Modifier</button>
                </div>
                <!--Fin modal oublie mot de passe-->
            </div>
        </div>
    </div>
    </form>
</div>
</div>
<?php include '../Views/includes/footer.php' ?>