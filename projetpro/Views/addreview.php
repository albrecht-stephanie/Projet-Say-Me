<?php 
require_once '../Views/includes/header.php';
?>
<!-- 
<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
           <p class="alert alert-success text-center">L'avis a bien été publié</p>
        </div>
    </div>
</div>-->

<!--Début des Formulaires-->
<form class="col-lg-8 ml-5" method="POST" action="../Controllers/adminController.php" novalidate="">
    <div class="form-group">
        <h2 class="newView">Publier un avis <i class="fa fa-paper-plane" aria-hidden="true"></i></h2>
        <label for="title">Titre de votre avis : </label>
        <input autocomplete="false" name="title" type="text" value="<?= $title ?>"
            class="form-control <?= (isset($isSubmit) && !isset($errors['title'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['title'])) ? 'is-invalid' : '' ?>"
            id="title" required>
        <div class="invalid-feedback">
            <?= $errors['title'] ?? '' ?>.
        </div>
    </div>
    <div class="form-group">
        <label for="textView">Votre avis : </label>
        <textarea autocomplete="false" name="textView" rows="5" cols="50" value="<?= $texte ?>"
            class="form-control <?= (isset($isSubmit) && !isset($errors['textView'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['textView'])) ? 'is-invalid' : '' ?>"
            id="texte" required></textarea>
        <div class="invalid-feedback">
            <?= $errors['textView'] ?? '' ?>.
        </div>
    </div>
    <div class="form-group">
        <label for="note">Note : </label>
        <input autocomplete="false" name="note" type="text" value="<?= $note ?>"
            class="form-control <?= (isset($isSubmit) && !isset($errors['note'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['note'])) ? 'is-invalid' : '' ?>"
            id="note" required>
        <div class="invalid-feedback">
            <?= $errors['note'] ?? '' ?>.
        </div>
    </div>
<button type="submit" class="col-8 offset-2 btn bg-success mt-2 mb-5"> Publier</button>
    
   

    <?php include '../Views/includes/footer.php' ?>