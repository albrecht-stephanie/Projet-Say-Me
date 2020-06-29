<?php 
require_once '../Views/includes/header.php';
if (isset($success)) {
?>
<div class="container">
  <div class="row col-sm-12 col-lg-10 offset-2">
    <!--card-->
    <div class="card customCard">
      <div class="card-header">
        <h3><?= $oneArticle->name ?></h3>
      </div>
      <div class="card-body">
        <img src="../assets/img/articles/<?= $oneArticle->image ?>" id="imgCard" alt="<?= $oneArticle->name ?>">
        <p class="card-text"><?= $oneArticle->startdescrib ?><br></p>
        
        <!-- bouton ouvrant la modal des caractérisques-->
        <button type="button" class="btn modaldesc btn-primary" data-toggle="modal"
          data-target="#A"<?= $oneArticle->id ?>>Lire Plus...</button>
        <!--fin bouton modal-->
      </div>
      <div class="card-footer">
        <a class="btn btn-info ml-4 mr-4" href="viewsController.php?article=<?= $oneArticle->id ?>" >Voir les avis</a>
        <a class="btn btn-success ml-4" href="../Controllers/addreviewsController.php?article=<?= $oneArticle->id ?>" role="button">Déposer un avis</a>

        <!-- Début de la Modal -->
          <div class="modal fade" id="A"<?= $oneArticle->startdescrib ?>>
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-info">
                  <h4 class="modal-title ">Description</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <p><?= $oneArticle->describ?>
                    <br>
                    Date de publication : <?= $oneArticle->publishDate?>
                  </p>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<!--end card article-->
<?php

}
else {
  $error;
}
 include '../Views/includes/footer.php' ?>