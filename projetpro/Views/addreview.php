<?php 
require_once '../Views/includes/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $isSubmit = true;
}else{
    $textView =""; // initialisation de la valeur par defaut du champ texte
}

?>

<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
            <?php if ((isset($success)) && ($success == true)){ ?>
            <p class="alert alert-success text-center">L'avis est en cours de validation</p>
        
            </div>
            <?php } else if ((isset($success)) && ($success != true)) { ?>
                <p class="alert alert-success text-center">Votre avis n\'a pas pu être transmis pour validation.</p>
            <?php } else { ?>
            <h2 class="newView">Publier un avis <i class="fa fa-paper-plane" aria-hidden="true"></i></h2>
            <!--Début formulaire ajout avis-->
            <form class="formView col-lg-10 offset-1 mt-3 mb-5" method="POST" action="#" novalidate="">
                <h3><?= $oneArticle->name ?></h3>
                <div class="form-group mt-3">
                    <label for="subtitle">Titre de votre avis : </label>
                    <input autocomplete="false" name="title" type="text" value="<?= $title ?>"
                        class="form-control <?= (isset($isSubmit) && !isset($errors['title'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['title'])) ? 'is-invalid' : '' ?>"
                        id="title" required>
                    <div class="invalid-feedback">
                        <?= $errors['title'] ?? '' ?>.
                    </div>
                </div>
                <div class="form-group">
                    <label for="textView">Votre avis : </label>
                    <textarea autocomplete="false" name="textView" rows="5" cols="50" 
                        class="form-control <?= (isset($isSubmit) && !isset($errors['textView'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['textView'])) ? 'is-invalid' : '' ?>"
                        id="texte" required><?= $textView ?></textarea>
                    <div class="invalid-feedback">
                        <?= $errors['textView'] ?? '' ?>.
                    </div>
                </div>
                <div class="form-group">
                    <label for="note">Note /10: </label>
                    <input autocomplete="false" name="note" type="number" max="10" min="1" value ="5"
                        class="form-control <?= (isset($isSubmit) && !isset($errors['note'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['note'])) ? 'is-invalid' : '' ?>"
                        id="note" required>
                    <div class="invalid-feedback">
                        <?= $errors['note'] ?? '' ?>.
                    </div>
                </div>
                <div class="form-group">
                    <label for="publishDate">Date : </label>
                    <input autocomplete="false" name="publishDate" type="date"  
                        class="form-control <?= (isset($isSubmit) && !isset($errors['publishDate'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['publishDate'])) ? 'is-invalid' : '' ?>"
                        id="publishDate" required>
                    <div class="invalid-feedback">
                        <?= $errors['publishDate'] ?? '' ?>.
                    </div>
                </div>
                <h3 class="userPublish">Publier par <?= $_SESSION['auth']['firstname'] ?></h3>
                <button type="submit" class="col-8 offset-2 btn bg-success mt-2 mb-5"> Publier</button>
            </form>
            <?php } ?>
        </div>
  
    </div>
 
</div>

<?php include '../Views/includes/footer.php' ?>


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
