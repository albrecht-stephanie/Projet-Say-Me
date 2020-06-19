<?php 
require_once '../Views/includes/header.php';
?>
<!--mot d'accueil-->
<p class="prez col-12 col-md-10 offset-1 mt-3">
  Bienvenue ! Partagez votre expérience utilisateur avec toute la communauté sur tous les produits : Higth tech,
  Electro-ménager, ...
  Essayons simplement d'être constructif. <i class="smile fa fa-smile-o" aria-hidden="true"></i></p>
<!-- card article-->
<h2>Les derniers articles publiés</h2>
<div class="container">
  <div class="row d-flex justify-content-around">
    <?php //boucle permettant d'afficher la requête SQL : class Article, public function threeLastPublish()
      $lastPublish= $article->threeLastPublish();   
        foreach ($lastPublish as $plublish){
                            ?>

    <!--card-->
    <div class="card">
      <div class="card-header">
        <h3><?= $plublish['name']?></h3>
      </div>
      <div class="card-body">
        <img src="../assets/img/articles/<?= $plublish['image']?>" alt="<?= $plublish['name']?>">
        <p class="card-text"><?= $plublish['startdescrib']?><br></p>
        
        <!-- bouton ouvrant la modal des caractérisques-->
        <button type="button" class="btn modaldesc btn-primary" data-toggle="modal"
          data-target="#A<?= $plublish['id']?>">Lire Plus...</button>
        <!--fin bouton modal-->
      </div>
      <div class="card-footer">
        <a class="btn btn-info" href="#Samsung Galaxy S9 Plus" title="views">Voir les avis</a>
        <a class="btn btn-success" href="addreviewController.php" role="button">Déposer un avis</a>

        <!-- Début de la Modal Description -->
          <div class="modal fade" id="A<?= $plublish['id']?>">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-info">
                  <h4 class="modal-title ">Description</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <p><?= $plublish['describ']?>
                    <br>
                    Date de publication : <?= $plublish['publishDate']?>
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
    <?php } ?>
  </div>
</div>
<!--end card article-->
<!--Début card avis-->
<h2>Les derniers avis publiés</h2>
<div class="container d-flex justify-content-around">
  <div class="row">
    <!--card view-->
    <div class="card col-lg-4 offset-1 mr-3">
      <div class="card-header">
        <h3 id="SamsungGalaxyS9Plus">Samsung Galaxy S9 Plus</h3>
      </div>
      <div class="card-body">
        <p class="card-text">Même si le S10 et bientôt le S20 sont sortis. Je ne souhaite pas changer de téléphone
          car je suis très satisfaite de celui-ci.
          Fildèle à Samsung depuis plusieurs années, je ne suis pas déçu encore une fois.
          <br>
          Date de publication :<br>
          Par :
        </p>
      </div>
      <div class="card-footer" id="rating">
        <h4>Note:
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i></h4>
      </div>
    </div>
    <!--end card-->
    <!--card-->
    <div class="card col-lg-4 offset-1">
      <div class="card-header">
        <h3 id="SamsungGalaxyS20Ultra">Samsung Galaxy S20 Ultra 5G 128 Go Noir</h3>
      </div>
      <div class="card-body">
        <p class="card-text">Excellent. Je recommande. Comment dire ? Une révolution. Bon, elle coûte chère mais
          faut bien se faire plaisir de temps en temps.
          Il faut un petit d'adaption mais l'univers Samsung reste inchangé. Et il a une qualité de photo qui
          rattrape largement les précédéceurs.
          <br>
          Date de publication :<br>
          Par :
        </p>
      </div>
      <div class="card-footer" id="rating">
        <h4>Note:
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i></h4>
      </div>
    </div>
    <!--end card view-->
  </div>
</div>

<?php include '../Views/includes/footer.php' ?>