<?php 
require_once '../Views/includes/header.php';

if (isset($error)) {?>
<p class="alert alert-danger text-center">Il n'y pas encore d'avis pour cet article</p>
<?php } 
else { ?>
<!--Début card avis-->

  <h2 class='text-light'>Les avis  sur <?= $article->name ?></h2>
  <div class="container d-flex justify-content-around">
    <div class="row">
<!--boucle pernettant d'afficher tous les avis d'un article-->
        <?php foreach ($allViews as $oneView) { ?>
            <!--card view-->
            <div class="card col-lg-4 offset-1 mr-3">
                <div class="card-header">
                <h3> <?= $oneView['title']?></h3>
                </div>
                <div class="card-body">
                <p class="card-text"><?= $oneView['textView'] ?></p>
                </div>
                <div class="card-footer" id="rating">
                <p>Note: <?= $oneView['note'] ?><br>
                Publier le : <?= $oneView['publishDate']?><br>
                Par : <?= $oneView['lastname'].$oneView['firstname'] ?>
                </p>
                </div>
            </div>
        <!--end card--> 
        <?php } ?>
    </div>
</div>
<?php }  
include '../Views/includes/footer.php' ?>