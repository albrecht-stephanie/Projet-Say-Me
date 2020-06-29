<?php 
require_once '../Views/includes/header.php';
if (isset($success)) {
?>
<!--<h2>Tous les articles  // $marque['id_marques']?></h2>-->
<div class="container">
  <div class="row  ">
    <div class="d-flex align-items-stretch justify-content-around">
    <?php //boucle permettant d'afficher la requête SQL : class Article, public function getMarque()
     
     
       foreach($MarqueList  as $marque){
         
                            ?>

    <!--card-->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4  p-2 d-flex align-items-stretch">
    <div class="card">
      <div class="card-header">
        <h3><?= $marque['name'] ?></h3>
      </div>
      <div class="card-body">
        <img src="../assets/img/articles/<?= $marque['image'] ?>" alt="<?= $marque['name']?>" >
        <p class="card-text"><?= $marque['startdescrib'] ?><br></p>
        
        <!-- bouton ouvrant la modal des caractérisques-->
        <button type="button" class="btn modaldesc btn-primary" data-toggle="modal"
          data-target="#A<?=$marque['id']?>">Lire Plus...</button>
        <!--fin bouton modal-->
      </div>
      <div class="card-footer">
        <a class="btn btn-info" href="viewsController.php?article=?<?= $marque['id'] ?>php" title="views">Voir les avis</a>
        <a class="btn btn-success" href="../Controllers/addreviewsController.php?article=<?= $marque['id'] ?>" role="button">Déposer un avis</a>

        <!-- Début de la Modal -->
          <div class="modal fade" id="A<?=$marque['id']?>">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-info">
                  <h4 class="modal-title ">Description</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <p><?= $marque['describ']?>
                    <br>
                    Date de publication : <?= $marque['publishDate']?>
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
      </div></div>
    <?php } 
    ?>
  </div>
</div></div>
<!--end card article-->
<?php
}
else {
  $error;
}
include '../Views/includes/footer.php' ?>