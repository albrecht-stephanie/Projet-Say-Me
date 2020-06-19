<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/digimeg.css">
  <link rel="stylesheet" href="assets/css/nice-menu.css">
  <link rel="stylesheet" media="screen" type="text/css" title="Mon style" href="assets/css/style.css"/>
  <title>Say me</title>
</head>
<body>
  <header>
    <?php include 'nav.php' ?>
    <h1 class="nameSite">Say Me</h1>
  </header>
  <!--fin de l'entête-->
<div class="container">
    <div class="row">
    <div class="addReview col-lg-6 offset-3 col-sm-12">
        <form method="post" action="#" enctype="multipart/form-data">
        <h2 class="nameForm text-center">Ajout d'un avis</h2>
        <div class="title">
            <label for="title">Titre de l'avis</label>
            <input type="text" id="title" name="title" required <?php //echo $title ?>>
           <!-- <span class="text-danger"><?//($errors['title']) ?? '' ?></span>-->
        </div>
         <div class="textReview">
         <label for="review"> Texte:</label>
         <textarea id="review" name="review" rows="5" cols="33"></textarea>
        </div>
        <div class="picture">
            <label for="picture">Photos du produit</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="104857600"/><!-- Limite 100Mo -->
            <input type="file" id="picture" name="picture" accept="image/png, image/jpeg, image/jpg" required><br>
        </div> 
        <div>
            <label for="note">Note</label>
            <input type="text" id="note" name="note" placeholder="8/10">
        </div>
            <button type="submit3" class="col-8 offset-2 btn bg-warning mt-2 mb-3"> Ajouter l'image</button>
        
        </form>
    </div>
</div>
<p><?php $message ?></p>
<?php include 'footer.php' ?>