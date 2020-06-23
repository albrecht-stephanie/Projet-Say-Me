<?php
require_once '../Views/includes/header.php';
?>
<p> Bonjour <?= ucfirst(strip_tags($_SESSION['auth']['firstname'])) ?><br>
Veuillez verifier et valider les derniers avis :
</p>
<form class="col-lg-8 ml-5" method="POST" action="#" novalidate="">
    <div class="form-group">
        <h2 class="newView">Les avis en attente :<i class="fa fa-paper-plane" aria-hidden="true"></i></h2>
        <label for="title">Titre de l'avis : </label>
        <input autocomplete="false" name="title" type="text" value="<?= htmlspecialchars($_POST['title']) ?>" id="title" required>
    </div>
    <div class="form-group">
        <label for="texte">Votre avis : </label>
        <textarea autocomplete="false" name="textView" rows="5" cols="50" value="<?= htmlspecialchars($_POST['texte']) ?>" id="textView" required></textarea>
    </div>
    <div class="form-group">
        <label for="note">Note : </label>
        <input autocomplete="false" name="note" type="text" value="<?= htmlspecialchars($_POST['note'])?>" id="note" required>
    </div>
<button type="submit" class="col-8 offset-2 btn bg-success mt-2 mb-5"> Publier</button>
<button type="submit" class="col-8 offset-2 btn bg-warning mt-2 mb-5"> Modifier</button>
<button type="submit" class="col-8 offset-2 btn bg-danger mt-2 mb-5"> Supprimer</button>

<?php include '../Views/includes/footer.php' ?>