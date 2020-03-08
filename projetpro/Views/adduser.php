<?php
//require_once '../Controllers/adduserController.php';
require_once '../Views/includes/header.php';
?>
<!--fin de l'entête-->
<?php if (isset($success)){ ?>
<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
            <p class="alert alert-success text-center">Le compte a bien été créer !<br>Vous pouvez maintenant vous connecter avec vos identifiants</p>
        </div>
    </div>
</div>
<?php } else { ?>
<!--Début des Formulaires-->
<div class="container d-flex flex-wrap align-content-around">

    <!--Formulaire d'inscription-->
    <div class="row ">
        <form class="first col-lg-12" method="POST" action="#" novalidate="">
            <div class="form-group">
                <h2 class="identity">Inscris-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
                <label for="firstname">Prénom : </label>
                <input autocomplete="false" name="firstname" type="text" value="<?= $firstname;?>"
                    class="form-control <?= (isset($isSubmit) && !isset($errors['firstname'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['firstname'])) ? 'is-invalid' : '' ?>"
                    id="firstname" required>
                <div class="invalid-feedback">
                    <?= $errors['firstname'] ?? '' ?>.
                </div>
            </div>
            <div class="form-group md-form">
                <label for="lastname">Nom : </label>
                <input autocomplete="false" name="lastname" type="text" value="<?= $lastname;?>"
                    class="form-control <?= (isset($isSubmit) && !isset($errors['lastname'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['lastname'])) ? 'is-invalid' : '' ?>"
                    id="lastname" required>
                <div class="invalid-feedback">
                    <?= $errors['lastname'] ?? '' ?>.
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="major"
                        class="form-check-input <?= (isset($isSubmit) && !isset($errors['major'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['major'])) ? 'is-invalid' : '' ?>"
                        type="checkbox" value="" id="major" required>
                    <label class="form-check-label" for="terms">Je suis majeur.</label>
                </div>
                <div class="invalid-feedback mt-3 ml-0">
                    <?= $errors['major'] ?? '' ?>.
                </div>
            </div>
            <div class="form-group md-form">
                <label for="emailRegister">Email : </label>
                <input autocomplete="false" name="email" type="email" value="<?= $email;?>"
                    class="form-control <?= (isset($isSubmit) && !isset($errors['email'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['email'])) ? 'is-invalid' : '' ?>"
                    id="emailRegister" required>
                <div class="invalid-feedback">
                    <?= $errors['email'] ?? '' ?>
                </div>
            </div>
            <div class="form md-form">
                <label for="password">Mot de passe : </label>
                <input autocomplete="false" name="password" type="password"
                    class="form-control <?= (isset($isSubmit) && !isset($errors['password'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password'])) ? 'is-invalid' : '' ?>"
                    id="password" required>
                <div class="invalid-feedback">
                    <?= $errors['password'] ?? '' ?>.
                </div>
                <div class="form md-form">
                    <label for="password_confirmation">Confirmation du mot de passe : </label>
                    <input autocomplete="false" name="password_confirmation" type="password"
                        class="form-control <?= (isset($isSubmit) && !isset($errors['password_confirmation'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password_confirmation'])) ? 'is-invalid' : '' ?>"
                        id="password_confirmation" required>
                    <div class="invalid-feedback">
                        <?= $errors['password_confirmation'] ?? '' ?>.
                    </div>
                </div>
            </div>

            <div class="custom-control custom-checkbox">
                <input name="conditions" type="checkbox"
                    class="custom-control-input <?= (isset($isSubmit) && !isset($errors['conditions'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['conditions'])) ? 'is-invalid' : '' ?>"
                    value="" id="conditions" required>
                <label class="custom-control-label" for="conditions">Agree to terms and conditions</label>

                <div class="invalid-feedback mb-3 ml-0">
                    <?= $errors['conditions'] ?? '' ?>.
                </div>
            </div>
            <button type="submit" class="col-8 offset-2 btn bg-info mt-2"> S'inscrire</button>
    </div>
</div>
<?php } ?>
<!--fin des formulaires-->
<?php include '../Views/includes/footer.php' ?>