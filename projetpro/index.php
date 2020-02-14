<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" media="screen" type="text/css" title="Mon style" href="assets/css/style.css" />
  <title>Say me</title>
</head>
<body>
  <header>
    <?php include 'nav.php' ?>
    <h1 class="nameSite">Say Me</h1>
  </header>
  <!--fin de l'entête-->
  <p class="prez col-lg-10 offset-1 col-sm-12 text-justify mt-3">
   Bienvenue ! Partager votre expérience utilisateur avec toute la communauté sur n'importe quel produit : Higth tech, Domotique, Voiture...<br>
   Essayons simplement d'être constructif.<i class="fa fa-smile-o" aria-hidden="true"></i></p>

  </p>
  <!-- card view article-->
  <h2>Les derniers avis publiés</h2>
  <div class="container d-flex justify-content-around">
    <div class="row">
      <!--card-->
      <div class="card col-lg-4 offset-1">
        <div class="card-header">
          <h3>Samsung Galaxy S9 Plus Dual SIM 64GB Noir</h3>
        </div>
        <div class="card-body">
          <p class="card-text">Excellent. Je recommande. Grand et rapide. Facilité d'adaptation pour moi qui avait
            avant
            un Wiko View3. J'ai acheté une coque et une protection pour l'écran car l'écran coute presque aussi cher à
            remplacer
            que de changer le téléphone.</p>
          <img src="assets/img/samsung-galaxy-s9-plus.png" alt="Samsung S9">
        </div>
        <div class="card-footer">
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
        </div>
      </div>
      <!--end card-->
      <!--card-->
      <div class="card col-lg-4 offset-1">
        <div class="card-header">
          <h3>Samsung Galaxy S20 Ultra 5G 128 Go Noir </h3>
        </div>
        <div class="card-body">
          <p>Très satisfait de mon achat. Je l'ai depuis 2 mois et j'en suis pleinement satisfait.
            Principalement sur le niveau de qualité des photos grâce à ces nouveaux objectifs.
          </p>
            <img src="assets/img/samsung-galaxy-s20-ultra.jpg" alt="Samsung S20">
        </div>
        <div class="card-footer rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
      </div>
      <!--end card-->
      <!--card-->
      <div class="card col-lg-4 offset-1">
        <div class="card-header">
          <h3>Acer Predator Triton 500 PT515-51-707Q</h3>
        </div>
        <div class="card-body">
          <p class="card-text">Cher mais puissant. Tous les derniers jeux passent et sont optimisés au max de ce que le jeu peut proposer.</p>
          <img src="assets/img/pc-predator.jpg" alt="Predator Triton">
        </div>
        <div class="card-footer">
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
        </div>
      </div>
      <!--end card-->
      <!--card-->
      <div class="card col-lg-4 offset-1">
        <div class="card-header">
          <h3>Mini Cooper 2016</h3>
        </div>
        <div class="card-body">
          <p class="card-text">Excellent. Je recommande. Grand et rapide. Facilité d'adaptation pour moi qui avait
            avant
            un Wiko View3. J'ai acheté une coque et une protection pour l'écran car l'écran coute presque aussi cher à
            remplacer
            que de changer le téléphone.</p>
          <img src="assets/img/mini-bleue.jpg" alt="Predator Triton">
        </div>
        <div class="card-footer">
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
        </div>
      </div>
      <!--end card-->
    </div>
  </div>
  <?php include 'footer.php' ?>