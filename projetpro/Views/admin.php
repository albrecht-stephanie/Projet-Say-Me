<?php
require_once '../Views/includes/header.php';
?>
<div class="container_adminValid">
    <h3 class="verif">Vérification et validation les derniers avis :</h3>
    <div class="row d-flex justify-content-around">
        <form class="validate col-lg-7 mb-3" method="POST" action="#" novalidate="">
            <h2 class="titleVerif">Les avis en attente :</h2>
            <div class="form-group ml-3">
                <label for="title">Titre de l'avis : </label>
                <input autocomplete="false" name="title" type="text" value="<?= htmlspecialchars($_POST['title']) ?>"
                    id="title" required>
            </div>
            <div class="form-group ml-3">
                <label for="texte">Votre avis : </label>
                <textarea autocomplete="false" name="textView" rows="5" cols="50"
                    value="<?= htmlspecialchars($_POST['texte']) ?>" id="textView" required></textarea>
            </div>
            <div class="form-group ml-3">
                <label for="note">Note : </label>
                <input autocomplete="false" name="note" type="text" value="<?= htmlspecialchars($_POST['note'])?>"
                    id="note" required>
            </div>
            <div class="row button justify-content-around col-lg-12 mb-2">
                <div class=btn1><button type="submit" class="btn bg-success"> Publier</button>
                </div>
                <div class=btn2><button type="submit" class="btn bg-warning"> Modifier</button>
                </div>
                <div class=btn3><button type="submit" class="btn bg-danger"> Supprimer</button>
                </div>
            </div>
    </div>
    </form>
</div>
<?php include '../Views/includes/footer.php' ?>