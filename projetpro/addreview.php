<?php
$isSubmitted = false;
$message= "";
//regex contrôle du formulaire
$regexText = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/";
$title = $review = $picture = '';
$formSubmitted = false;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formSubmitted = true;
    //verif champ title
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING)); //enlève les espaces vides avant et après + nettoyage en fonction du type 
    if (empty($title)) {//verifie si le champ est vide
        $errors['title'] = 'Veuillez renseigner le prénom';
    } elseif (!preg_match($regexText, $title)) {//comparatif avec la regex correspondante
        $errors['title'] = 'Votre titre contient des caractères non autorisés !';
    }
    //verif texte de l'avis
    $review = trim(filter_input(INPUT_POST,'review',FILTER_SANITIZE_STRING));
    if (empty($review)) {
        $errors['review'] = 'Veuillez laisser un descriptif de votre avis';
    }
    //verif envoi de fichier et de son extension
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
        $fileInfo = pathinfo($_FILES['picture']['name']);// Récupére le nom du fichier et son extension dans les tableaux concernés (pour récupérer les clés et les valeurs d'un tableau, utiliser le var_dump)
        $fileName = $fileInfo['basename'];// Récupère le chemin et l'extension du fichier
        if (strtolower($fileInfo['extension']) == 'png, jpeg, jpg') { //convertit tous les caractères en minuscule
            $message= 'Merci, votre fichier ' . htmlspecialchars($picture) . ' a bien été pris en compte';
            $formSubmitted = false; // Cache le formulaire si la condition est remplie
        }
    } else {
        $message = 'Veuillez réessayer, l\'envoi de votre fichier n\'a pas abouti';
        }
    }
}

if ($formSubmitted) { // Si le formSubmitted est toujours "true" affiche le formulaire 
    ?>
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
<h1 class="nameSite">Say Me</h1>
</header>
<!--fin de l'entête-->
<div class="container">
    <div class="row">
    <div class="addReview col-lg-6 offset-3 col-sm-12">
        <form method="post" action="#" enctype="multipart/form-data">>
        <h2 class="nameForm text-center">Ajout d'un avis</h2>
        <div class="title">
            <label for="title">Titre de l'avis</label>
            <input type="text" id="title" name="title" required <?php echo $title ?>>
            <span class="text-danger"><?= ($errors['title']) ?? '' ?></span>
        </div>
         <div class="textReview">
         <label for="review"> Texte:</label>
         <textarea id="review" name="review" rows="5" cols="33"></textarea>
        </div>
        <div class="picture">
            <label for="picture">Photos du produit</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="104857600"/><!-- Limite 100Mo -->
            <input type="file" id="picture" name="picture" accept="image/png, image/jpeg, image/jpg" required><br>
            <button type="submit3" class="col-8 offset-2 btn bg-warning mt-2 mb-3"> Ajouter l'image</button>
        </div>
        </form>
    </div>
</div>
<?php }
?>
<p><?= $message2 ?></p>
<?php include 'footer.php' ?>