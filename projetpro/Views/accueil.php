<?php 
require_once '../Views/includes/header.php';
?>
<div class="container-fluid">
  <div class='mainPage'>
    <!--mot d'accueil-->
    <p class="prez mt-3">
      Bienvenue ! Partagez votre expérience utilisateur avec toute la communauté sur tous les produits.</p>
    <!-- card article-->
    <h2>Les derniers articles publiés</h2>
    <div class="row d-flex align-items-stretch">
      <!--boucle permettant d'afficher la requête SQL : class Article, public function threeLastPublish-->
         
      <?php 
      $lastPublish= $article->threeLastPublish();   
   
        foreach ($lastPublish as $plublish){

                            ?>
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3 p-2 d-flex align-items-stretch">
      <!--card-->
      <div class="card ">
        <div class="card-header">
          <h3><?= substr($plublish['name'],0,300).'...'?></h3>
        </div>
        <div class="card-body">
          <img class="img-fluid col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3"  src="../assets/img/articles/<?= $plublish['image']?>" alt="<?= $plublish['name']?>">
          <p class="card-text"><?= substr($plublish['startdescrib'],0,300).'...'?><br></p>

          <!-- bouton ouvrant la modal des caractérisques-->
          <button type="button" class="btn modaldesc btn-primary" data-toggle="modal"
            data-target="#A<?= $plublish['id']?>">Lire Plus...</button>
          <!--fin bouton modal-->
        </div>
        <div class="card-footer">
          <a class="btn btn-info ml-4 mr-4" href="viewsController.php?article=<?= $plublish['id']?>" title="views">Voir les avis</a>
          <a class="btn btn-success ml-4" href="addreviewsController.php?article=<?= $plublish['id']?>"
            role="button">Déposer un avis</a>
        </div>

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
        <!-- fin de la modal -->
      </div></div>
      <?php } ?>
    </div>

    <!--<div class="row d-flex justify-content-around col-lg-10 offset-1 nb-5">
    <?php //if (isset($error)) {?>
      <p class="alert alert-danger text-center">Il n'y pas encore d'avis pour cet article</p>
    <?php// } 
         // else { ?>
            <h2>Les derniers avis publiés</h2>-->
            <!-- boucle permetannt d'afficher les derniers avis publiés-->
            <?php //$lastPublishViews= $views->threeLastViews();
            //foreach ($lastPublishViews as $allViews) { ?>
            <!--card view-->
            <!--<div class="card col-lg-4 offset-1 mr-3">
                        <div class="card-header">
                        <h3> <?php //$allViews['title'] ?></h3>
                        </div>
                        <div class="card-body">
                        <p class="card-text"><?php //$allViews['textView'] ?></p>
                        </div>
                        <div class="card-footer" id="rating">
                        <p>Note: <?php //$allViews['note'] ?><br>
                        Publier le : <?php //allViews['publishDate'] ?><br>
                        Par : <?php //$allViews['id_users'] ?>
                        </p>
                        </div>
            </div>-->
                  <!--end card--> 
            <?php //}
            //} ?>
   </div>
  </div>
</div>

<script type="text/javascript" src="//cookie.eurowebpage.com/cookie.js?skin=cookielaw1&amp;position=bottom&amp;animation=shake
&amp;accept_text=Accepter&amp;learnmore=&amp;morelink="></script>

<?php include '../Views/includes/footer.php' ?>