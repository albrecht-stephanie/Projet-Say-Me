<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" type="text/css" title="Mon style" href="assets/css/style.css"/>
    <title>Say me</title>
</head>
<body>
<header>
<?php include 'nav.php' ?>
<h1 class="nameSite mb-5">Say Me</h1>
</header>
<!--fin de l'entête-->
    <!--Début des Formulaires-->
    <div class="container">
      <!--Formulaire d'inscription-->
      <div class="row d-flex flex-wrap align-content-start offset-2">
        <form class="first" method="post" action="#">
          <div class="form1 col-lg-9 offset-2 col-sm-12 ml-5 mr-2 mt-2 pb-2">
            <h2 class="inscription">Incris-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
              <div class="lastName ml-3 mr-3">
                <label for="lastName" >Nom</label>
                <input type="text"  id="lastName" placeholder="Dupont" required>
              </div>
              <div class="firstname ml-3 mr-3">
                  <label for="firstName"> Prénom</label>
                  <input type="text" id="firstName" placeholder="Daniel" required>
              </div>
              <div class="birthDate ml-3 mr-3">
                <label for="birthDate">Date de Naissance</label>
                <input type="date"  id="birthDate" placeholder="26/03/1995" required>
              </div>
              <div class="mail ml-3 mr-3">
                <label for="mail"> Mail</label>
                <input type="mail" id="mail" placeholder="Dupont.daniel@gmail.com" required>
              </div>
              <div class="password ml-3 mr-3">
                <label for= "password">Mot de passe</label>
                <input type="password" id="password" required>
              </div>
              <div class="confirmPassword ml-3 mr-3">
              <label for="confirmPassword">Confirmation mot de passe</label>
              <input type="password" id="confirmPassword" required>
              </div>
              <button type="submit1" class="col-8 offset-2 btn bg-warning mt-2"> Enregistrer</button>
            </div>
        </form>
      <!--fin du formulaire d'inscription-->
      <!--début formulaire d'identifiaction-->
       <form class="second" method="post" action="#">
        <div class="form2 col-lg-9 offse-2 col-sm-12 ml-5 mt-2 pb-2">
          <h2 class="identity">Connectes-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
            <div class="mail ml-3 mr-3">
              <label for="mail">Mail</label>
              <input type="mail" id="mail" placeholder="Dupont.daniel@gmail.com" required>
            </div>
            <div class="password ml-3 mr-3">
              <label for="password">Mot de passe</label>
              <input type="password" id="password" required>
            </div>
            <button type="submit2" class="col-8 offset-2 btn bg-danger mt-2"> Se connecter</button>
        </div>
        </form>
      </div>
    </div>
    <!--fin des formulaires-->
    <?php include 'footer.php' ?>
    