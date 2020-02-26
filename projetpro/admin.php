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
  <!--<link rel="stylesheet" href="assets/css/nicemenu.css">-->
  <link rel="stylesheet" href="assets/css/digimeg.css">
  <link rel="stylesheet" href="assets/css/nice-menu.css">
  <link rel="stylesheet" media="screen" type="text/css" title="Mon style" href="assets/css/style.css" />
  <title>Say me</title>
</head>

<body>
  <header>
    <?php include 'nav.php' ?>
    <h1 class="nameSite">Say Me</h1>
  </header>
  <div class="container col-12 col-lg-4 d-flex justify-content-around">
    <div class="row">
      <h2 class="title-waiting">Les articles en attente</h2>
      <!--card-->
      <div class="card ">
        <div class="card-header">
          <h3>Samsung Galaxy S9 Plus Dual SIM 64GB Noir</h3>
        </div>
        <div class="card-body">
          <a href="https://www.samsung.com/fr/smartphones/galaxy-s9/" title="lien vers Samsung">
            <img src="assets/img/samsung-galaxy-s9-plus.png" alt="Samsung S9+"></a>
          <p class="card-text">Smartphone débloqué Samsung S9 doté d'un écran infinity 6, 2" Quad HD+ ultra lumineux,
            d'un mode vidéo super ralenti de 960 images/secondes.<br></p>
          <details>
            <summary>lire plus...</summary>
            <p>Grâce à son appareil photo arrière de 12 MP Dual Pixel, faisant capteur téléobjectif zoom optique x2, il
              est désormais possible de bénéficier de photos claires même en basse lumière.
              Il est également équipé d'un appareil photo frontal de 8MP doté d'un autofocus, du contrôle par mouvement
              et vocal, du flash avant et d'ouverture f/1, 7.
              Le Samsung Galaxy S9 Plu6 est doté de haut-parleurs stéréo développés par AKG. Le processeur Octo core et
              les mémoires RAM de 6Go, et ROM de 64Go (plus port microSD jusqu'à 256Go) permettent d'avoir accès à vos
              contenus rapidement.
              Il est équipé d'une batterie de 3500mAh, rechargeable en charge rapide et/ou charge sans fil, et dotée de
              mode économie d'énergie, et ultra économie d'énergie. Il est compatible avec les réseaux 2G, 3G, 4G, 4G+,
              fonctionne sous Android Oreo 8.0, et avec une surcouche Samsung Expérience 9.0.
              Il est doté d'un double port nano SIM. La sécurité de votre smartphone est garantie grâce à la
              reconnaissance par: empreinte digitale, iris, faciale, ainsi que par la technologie embarquée Knox 3.1.
              <br>
            </p>
          </details>
        </div>
        <div class="card-footer">
          <a class="btn btn-info" href="#Samsung Galaxy S9 Plus" title="views">Voir les avis</a>
          <a class="btn btn-success" href="addreview.php" role="button">Déposer un avis</a>
        </div>
        <button type="submit" class="btn bg-danger mt-2 mb-1"> Corriger</button>
        <button type="submit" class="btn bg-warning mb-2"> Publier</button>
      </div>
      
          <h2 class="title-waiting">Les avis en attente</h2>
          <!--card view-->
          <div class="card ">
            <div class="card-header">
              <h3 id="Samsung Galaxy S9 Plus">Samsung Galaxy S9 Plus</h3>
            </div>
            <div class="card-body">
              <p class="card-text">Même si le S10 et bientôt le S20 sont sortis. Je ne souhaite pas changer de téléphone
                car je suis très satisfaite de celui-ci.
                Fildèle à Samsung depuis plusieurs années, je ne suis pas déçu encore une fois.</p>
            </div>
            <div class="card-footer" id="rating">
              <h4>Note:
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i></h4>
            </div>
            <button type="submit" class="btn bg-danger mt-2 mb-1"> Corriger</button>
            <button type="submit" class="btn bg-warning mb-2"> Publier</button>
          </div>
        </div>
          <!--end card-->
          <?php include 'footer.php' ?>