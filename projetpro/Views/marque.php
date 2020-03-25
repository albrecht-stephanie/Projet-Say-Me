<?php 
require_once '../Views/includes/header.php';
?>
<!--<h2>Tous les articles  // $marque['id_marques']?></h2>-->
<div class="container">
  <div class="row d-flex justify-content-around">
    <?php //boucle permettant d'afficher la requête SQL : class Article, public function getMarque()
      $oneMarque = $article->getMarqueById();   
       foreach($oneMarque as $marque){
                            ?>

    <!--card-->
    <div class="card">
      <div class="card-header">
        <h3><?= $marque['name']?></h3>
      </div>
      <div class="card-body">
        <img src="../assets/img/articles/<?= $marque['image']?>" alt="<?= $marque['name']?>">
        <p class="card-text"><?= $marque['startdescrib']?><br></p>
        
        <!-- bouton ouvrant la modal des caractérisques-->
        <button type="button" class="btn modaldesc btn-primary" data-toggle="modal"
          data-target="#A<?= $marque['id']?>">Lire Plus...</button>
        <!--fin bouton modal-->
      </div>
      <div class="card-footer">
        <a class="btn btn-info" href="#Samsung Galaxy S9 Plus" title="views">Voir les avis</a>
        <a class="btn btn-success" href="addreview.php" role="button">Déposer un avis</a>

        <!-- Début de la Modal -->
          <div class="modal fade" id="A<?= $marque['id']?>">
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
      </div>
    <?php } 
    ?>
  </div>
</div>
<!--end card article-->
<?php include '../Views/includes/footer.php' ?>