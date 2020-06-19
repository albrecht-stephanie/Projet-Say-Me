<?php 
require_once '../Views/includes/header.php';
?>

<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
            <p class="alert alert-success text-center">L'avis a bien été publié</p>
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
                <h2 class="newView">Publier un avis <i class="fa fa-paper-plane" aria-hidden="true"></i></h2>
                <label for="title">Titre de votre avis : </label>
                <input autocomplete="false" name="title" type="text" value="<?= $title;?>"
                    class="form-control <?= (isset($isSubmit) && !isset($errors['title'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['title'])) ? 'is-invalid' : '' ?>"
                    id="title" required>
                <div class="invalid-feedback">
                    <?= $errors['title'] ?? '' ?>.
                </div>
            </div>
            <div class="form-group">
                <label for="texte">Votre avis : </label>
                <input autocomplete="false" name="texte" type="textarea" value="<?= $texte;?>"
                    class="form-control <?= (isset($isSubmit) && !isset($errors['texte'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['texte'])) ? 'is-invalid' : '' ?>"
                    id="texte" required>
                <div class="invalid-feedback">
                    <?= $errors['texte'] ?? '' ?>.
                </div>
            </div>
            <div class="form-group">
                <label for="note">Note : </label>
                <input autocomplete="false" name="note" type="text" value="<?= $note;?>"
                    class="form-control <?= (isset($isSubmit) && !isset($errors['note'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['note'])) ? 'is-invalid' : '' ?>"
                    id="note" required>
                <div class="invalid-feedback">
                    <?= $errors['note'] ?? '' ?>.
                </div>
            </div>
            <div class="form-group">
                <label for="periodpicker">Date et heure de publication : </label>
                <input autocomplete="false" name="publishDate" type="text" required>
                <div class="invalid-feedback">
                    <?= $errors['publishDate'] ?? '' ?>.
                </div>
            </div>
            <button type="submit" class="col-8 offset-2 btn bg-success mt-2"> S'inscrire</button>
            }
            <script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery.datetimepicker.full.js"></script>
            <script>
    var min_date = new Date();
    jQuery.datetimepicker.setLocale('fr');
    jQuery('#periodpicker').datetimepicker({
        format: 'd.m.Y H:i',
        minDate: min_date,
        inline: false,
        lang: 'fr'
    });
   
</script>

<?php include '../Views/includes/footer.php' ?>