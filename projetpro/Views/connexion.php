<?php
require_once '../Views/includes/header.php';
?>
<div class="container-connect">
    <!--Formulaire d'inscription-->
    <div class="row ">
        <form class="second" method="post" action="#" novalidate="">
            <div class="form">
                <h2 class="identity">Connectes-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
                <div class="mail ml-3 mr-3">
                    <label for="email">Mail</label>
                    <input type="email" id="mail" placeholder="Dupont.daniel@gmail.com" required>
                    <?php if (isset($errors['login'])){ ?>
                    <span class="text-danger"><?= $errors['login'] ?></span>
                    <?php } ?>
                </div>
                <div class="password ml-3 mr-3 mb-3">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" required>
                    <?php if (isset($errors['password'])){ ?>
                    <span class="text-danger"><?= $errors['password'] ?></span>
                    <?php } ?>
                </div>
                <button type="submit" class="col-8 offset-2 btn bg-success mt-2"> Se connecter</button>
                <a class="btn btn-warning col-8 offset-2" href="../Views/adduser.php"> Ou inscris-toi !</a>
            </div>
            <!--Début de la modal oublie mot de passe-->
            <div>
                <button type="button" class="btn btn-link ml-5" data-toggle="modal" data-target="#updatepasswd" data-whatever="@mdo">Mot de passe oublié ?</button>
            </div>
            <div class="modal fade" id="updatepasswd" tabindex="-1" role="dialog" aria-labelledby="updatepasswd" aria-hidden="true">
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
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Nouveau mot de passe:</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" class="col-form-label">Confirmation du mot de passe:</label>
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