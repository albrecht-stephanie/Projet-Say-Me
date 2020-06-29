<?php
require_once '../Views/includes/header.php';
?>
<!--fin de l'entête-->
<!--Alert creation compte réussi -->
<?php if (isset($success)){ ?>
<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
            <p class="alert alert-success text-center">Le compte a bien été créé !<br>Vous pouvez maintenant vous
                connecter avec vos identifiants</p>
        </div>
    </div>
</div>
<?php } else { ?>
    <!--Formulaire d'inscription-->
    <div class="row ">
        <h2 class="identity">Inscris-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
        <form class="first col-lg-6 offset-3 mb-5" method="POST" action="#" novalidate="">
            <div class="form-group mt-3">
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
            <div class="custom-control custom-checkbox mb-3">
                <input name="major" type="checkbox"
                    class="custom-control-input <?= (isset($isSubmit) && !isset($errors['major'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['major'])) ? 'is-invalid' : '' ?>"
                     value="" id="major" required>
                <label class="custom-control-label" for="major">Je suis majeur.</label>
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
        <label for="password">Mot de passe (8caractères, 1 Majuscule, 1 Minuscule, 1 chiffre, 1 caractère spécial): </label>
        <input autocomplete="false" name="password" type="password"
            class="form-control <?= (isset($isSubmit) && !isset($errors['password'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password'])) ? 'is-invalid' : '' ?>"
            id="password" required>
        <div class="invalid-feedback">
            <?= $errors['password'] ?? '' ?>.
        </div>
        </div>
        <div class="form md-form mt-2">
            <label for="password_confirmation">Confirmation du mot de passe : </label>
            <input autocomplete="false" name="password_confirmation" type="password"
                class="form-control <?= (isset($isSubmit) && !isset($errors['password_confirmation'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password_confirmation'])) ? 'is-invalid' : '' ?>"
                id="password_confirmation" required>
            <div class="invalid-feedback">
                <?= $errors['password_confirmation'] ?? '' ?>.
            </div>
        </div>
    <div class="custom-control custom-checkbox mt-3 mb-2">
        <input name="conditions" type="checkbox"
            class="custom-control-input <?= (isset($isSubmit) && !isset($errors['conditions'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['conditions'])) ? 'is-invalid' : '' ?>"
            value="" id="conditions" required>
        <label class="custom-control-label" for="conditions">Accepter les termes et conditions</label>
        <div class="invalid-feedback mb-3 ml-0">
            <?= $errors['conditions'] ?? '' ?>.
        </div>
    </div>
    <button type="submit" class="col-6 offset-3 btn btn-outline-info mb-3"> S'inscrire</button>
</div>
</div>
<?php } ?>
<!--fin des formulaires-->
<?php include '../Views/includes/footer.php' ?>