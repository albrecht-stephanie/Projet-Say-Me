<?php
require_once '../Views/includes/header.php';

?>


<div class="container container_adminValid">

    <div class="row ">
        <div class="col-4 offset-4">

            <?php echo $ifValidSuccess.$ifSupprSuccess ?>
        </div>

        <h3 class="verif col-12">Validation/Suppression ses avis en attente:</h3>
        <!--on verifie si il existe des avis ayant le status 0 et on les affiche -->

        <?php 
    $i = 0; // i= nombre d'avis en attente de validation
    if ($validate!=NULL){
        foreach($validate as $oneValidate){
        $i++;
        ?>
        <div class="card offset-1">
            <div class="card-header">
                <h5><?= $oneValidate['title'] ?> </h5>
                <h3>Article: <?= $oneValidate['name'] ?></h3>
            </div>
            <div class="card-body">
                <p><?= $oneValidate['textView'] ?></p>
            </div>
            <div class="card-footer">
                <p>Note :<?= $oneValidate['note'] ?><br>
                    Date de publication :<?= date('d/m/Y', strtotime($oneValidate['publishDate'])) ?><br>
                    Par : <?= $oneValidate['lastname'].' '.$oneValidate['firstname']  ?></p>
                <!--si l'avis est ok on passe le status à 1-->
                <form class="status" method="POST" action="#">
                    <input id="validID" name="validID" type="hidden" value="<?= $oneValidate['id'] ?>">
                    <div class="row button justify-content-around col-lg-12 mb-2">
                        <div class=btn1><button type="submit" class="btn bg-success"> Publier</button>
                        </div>
                </form>
                <!--Suppression avec demande de confirmation par le biais d'une modal et confirmation ou non de la suppression de l'avis-->
                <form method="POST" action="#">
                    <input id="validID" name="supprID" type="hidden" value="<?= $oneValidate['id'] ?>">
                    <div class=btn1><button type="submit" class="btn bg-danger">Supprimer</button>
                </form>

                </div>
            </div>
        </div>
    </div>
    <?php }
    }
    
   
    //sinon message pas d'avis de status 0
    if ($i==0) {
        ?>  <div class="alert alert-danger col-12 text-center" role="alert">Aucun avis à valider</div><?php
    }?>

<!-- Modal de suppression de l'avis -->
<div class="modal" id="deleteView" tabindex="-1" role="dialog" aria-labelledby="deleteViewLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Suppression d'un avis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Etes vous sur de vouloir supprimer cet avis ? <br> Cette action est irréversible !</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <a href="../Controllers/deleteViewController.php" class="btn btn-primary">Supprimer</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php include '../Views/includes/footer.php' ?>