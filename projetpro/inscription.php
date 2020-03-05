
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
            <div class="background"></div>
            <?php include 'nav.php' ?>
            <h1 class="nameSite">Say Me</h1>
        </header>
        <!--fin de l'entête-->
        <!--Début des Formulaires-->
        <div class="container d-flex flex-wrap align-content-around">
            <!--Formulaire d'inscription-->
            <div class="row ">
                <form class="first col-lg-5 offset-1 mb-4" method="post" action="#">
                    <div class="form1">
                        <h2 class="inscription">Incris-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
                        <div class="lastName ml-3 mr-3">
                            <label for="lastName" >Nom</label>
                            <input type="text"  id="lastName" placeholder="Dupont" class="form-control <?= (isset($isSubmit) && !isset($errors['firstname'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['firstname'])) ? 'is-invalid' : '' ?>" id="firstname" required>
                        </div>
                        <div class="invalid-feedback">
                            <?= $errors['lastname'] ?? '' ?>.
                        </div>
                        <div class="firstname ml-3 mr-3">
                            <label for="firstName"> Prénom</label>
                            <input type="text" id="firstName" placeholder="Daniel" class="form-control <?= (isset($isSubmit) && !isset($errors['lastname'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['lastname'])) ? 'is-invalid' : '' ?>" id="lastname" required>
                        </div>
                        <div class="invalid-feedback">
                            <?= $errors['firstname'] ?? '' ?>.
                        </div>
                        <div class="major ml-3 mr-3">
                            <input name="major" class="form-check-input <?= (isset($isSubmit) && !isset($errors['major'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['major'])) ? 'is-invalid' : '' ?>" type="checkbox" value="" id="major" required>
                            <label class="form-check-label" for="terms">Etes vous majeur ?</label>
                        </div>
                        <div class="invalid-feedback">
                            <?= $errors['major'] ?? '' ?>.
                        </div>
                        <div class="mail ml-3 mr-3">
                            <label for="mail"> Mail</label>
                            <input type="mail" id="mail" placeholder="Dupont.daniel@gmail.com" class="form-control <?= (isset($isSubmit) && !isset($errors['mail'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['mail'])) ? 'is-invalid' : '' ?>" id="mail" required>
                        </div>
                        <div class="invalid-feedback">
                            <?= $errors['mail'] ?? '' ?>.
                        </div>
                        <div class="password ml-3 mr-3">
                            <label for= "password">Mot de passe</label>
                            <input type="password" id="password" class="form-control <?= (isset($isSubmit) && !isset($errors['password'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password'])) ? 'is-invalid' : '' ?>" id="password" required>
                        </div>
                        <div class="invalid-feedback">
                            <?= $errors['password'] ?? '' ?>.
                        </div>
                        <div class="confirmPassword ml-3 mr-3">
                            <label for="confirmPassword">Confirmation mot de passe</label>
                            <input type="password" id="confirmPassword" class="form-control <?= (isset($isSubmit) && !isset($errors['password_confirmation'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password_confirmation'])) ? 'is-invalid' : '' ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= $errors['confirmPassword'] ?? '' ?>.
                        </div>
                        <div class="conditions ml-3 mr-3">
                            <input name="conditions" id="conditions" class="form-check-input <?= (isset($isSubmit) && !isset($errors['conditions'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['conditions'])) ? 'is-invalid' : '' ?>" type="checkbox" value="" id="conditions" required>
                            <label class="form-check-label" for="terms">Accord des conditions générales ?</label>
                        </div>
                        <div class="invalid-feedback">
                            <?= $errors['conditions'] ?? '' ?>.
                        </div>
                        <button type="submit1" class="col-8 offset-2 btn bg-warning mt-2"> Enregistrer</button>
                    </div>
                </form>
                <!--fin du formulaire d'inscription-->
                <!--début formulaire d'identifiaction-->
                <form class="second col-lg-5 offset-1 mb-4" method="post" action="#">
                    <div class="form2">
                        <h2 class="identity">Connectes-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
                        <div class="mail ml-3 mr-3">
                            <label for="mail">Mail</label>
                            <input type="mail" id="mail" placeholder="Dupont.daniel@gmail.com" required>
                        </div>
                        <div class="password ml-3 mr-3">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" required>
                        </div>
                        <button type="submit2" class="col-8 offset-2 btn bg-success mt-2"> Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    
        <!--fin des formulaires-->
        <?php include 'footer.php' ?>
