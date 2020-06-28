<?php
require_once '../Views/includes/header.php';

if (isset($success)) {
    // message de confirmation et on informe à l'utilisateur qui va être déconnecté
    ?>
<div class="container">
            <p class="alert alert-success text-center">Le profil a été modifié avec succès!<br> Veuillez vous reconnecter.</p>
<?php } 
else{
    ?>
    <h3 class="titleReadProfil mt-2 mb-2">Consulter et modifier mon profil</h3>
    <div class="row col-lg-12">
        <form class="readProfil col-lg-6 offset-3 mb-3" method="post" action="#">
            <p class="infoReadProfil mt-3">En cas de modification, une reconnexion sera necessaire pour valider vos paramètres.</p>
                <div class="form-group">
                    <label for="lastName">Nom</label>
                    <input name="lastname" type="text" id="lastName" class="form-control" placeholder=""
                        value="<?= $users->lastname ?>"><span class="invalid-feedback d-block"><?= ($errors['lastname']) ?? '' ?></span>
                </div>
                <div class="form-group">
                    <label for="firstName">Prénom</label>
                    <input name="firstname" type="text" id="firstName" class="form-control" placeholder=""
                        value="<?= $users->firstname ?>"><span class="invalid-feedback  d-block"><?= ($errors['firstname']) ?? '' ?></span>
                </div>
                <div class="form-group">
                    <label for="email"> Mail:</label>
                    <input name="email" type="email" id="email" class="form-control" placeholder=""
                        value="<?= $users->email ?>"><span class="invalid-feedback  d-block"><?= $errors['email'] ?? '' ?></span>   
                </div>
                <div class="btn-group offset-2 mb-3" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-info ml-3">Modifier</button>
                    <button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#deleteProfil">Supprimer mon profil</button>
                    <a href="../Controllers/accueilController.php" class="btn btn-success ml-3">Retour</a>
                </div>
        </form>    
    </div>
    <!-- Modal -->
    <div class="modal" id="deleteProfil" tabindex="-1" role="dialog" aria-labelledby="deleteProfilLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteProfilLabel">Suppression de profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <p>Etes vous sur de vouloir supprimer votre profil ? <br> Cette action est irreversible !</p>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <a href="../Controllers/deleteprofilController.php"  class="btn btn-primary">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
require_once '../Views/includes/footer.php';

?>