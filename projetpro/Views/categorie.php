<?php 
require_once '../Views/includes/header.php';
if (isset($success)) {
?>

<div class="container">
  <div class="row">
  <div class="d-flex align-items-stretch justify-content-around">
  
<!--boucle permettant d'afficher la requête SQL : class Article, public function getcategorie$categorie-->
    <?php
        
       foreach($CatList as $categorie){
                            ?>

    <!--card-->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3 p-2 d-flex align-items-stretch">
 
    <div class="card">
      <div class="card-header">
        <h3><?= $categorie['name']?></h3>
      </div>
      <div class="card-body">
        <img src="../assets/img/articles/<?= $categorie['image']?>" alt="<?= $categorie['name']?>">
        <p class="card-text"><?= $categorie['startdescrib']?><br></p>
        
        <!-- bouton ouvrant la modal des caractérisques-->
        <button type="button" class="btn modaldesc btn-primary" data-toggle="modal"
          data-target="#A<?= $categorie['id']?>">Lire Plus...</button>
        <!--fin bouton modal-->
      </div>
      <div class="card-footer">
        <a class="btn btn-info" href="viewsController.php?article=?<?= $marque['id'] ?>" title="views">Voir les avis</a>
        <a class="btn btn-success" href="../Controllers/addreviewsController.php?article=<?= $categorie['id'] ?>" role="button">Déposer un avis</a>

        <!-- Début de la Modal -->
          <div class="modal fade" id="A<?= $categorie['id']?>">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-info">
                  <h4 class="modal-title ">Description</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <p><?= $categorie['describ']?>
                    <br>
                    Date de publication : <?= $categorie['publishDate']?>
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
  </div></div>
</div>
<!--end card article-->
<?php
}
else {
  $error;
}
include '../Views/includes/footer.php' ?>