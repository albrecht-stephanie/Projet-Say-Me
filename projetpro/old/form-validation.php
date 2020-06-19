<?php//verif formulaire ajout d'avis
$isSubmitted = false;
//regex contrôle du formulaire
$regexTitle = '/^[\\r\\n0-9a-z-A-ZÉzáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ:_*(),./!?; ]{1,30}?$/';
$regexText = '/^[\\r\\n0-9a-z-A-ZÉzáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ:_*(),./!?; ]{1,1000}?$/';
$title = $review = $picture = '';
$errors = [];
$success = 'Merci. Votre avis est enregistrer et sera en ligne dans quelques instants.';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $isSubmitted = true;
    //verif champ title
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING)); //enlève les espaces vides avant et après + nettoyage en fonction du type 
    if (empty($title)) {//verifie si le champ est vide
        $errors['title'] = 'Veuillez renseigner un titre';
    } elseif (!preg_match($regexTitle, $title)) {//comparatif avec la regex correspondante
        $errors['title'] = 'Votre titre contient des caractères non autorisés !';
    }
    //verif texte de l'avis
    $review = trim(filter_input(INPUT_POST,'review',FILTER_SANITIZE_STRING));
    if (empty($review)) {
        $errors['review'] = 'Veuillez laisser un descriptif de votre avis';
    }elseif (!preg_match($regexText, $title)) {//comparatif avec la regex correspondante
        $errors['review'] = 'Votre texte contient des caractères non autorisés !';
        }
    //verif envoi de fichier et de son extension
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $fileInfo = pathinfo($_FILES['file']['name']);// Récupère le nom du fichier et son extension dans les tableaux concernés (pour récupérer les clés et les valeurs d'un tableau, utiliser le var_dump)
        $fileName = $fileInfo['basename'];// Récupère le chemin et l'extension du fichier
        if (strtolower($fileInfo['extension']) == 'png, jpeg, jpg') { //convertit tous les caractères en minuscule?>
            <p><?='Merci, votre fichier ' . htmlspecialchars($picture) . ' a bien été pris en compte.'?></p>
            <?php ;} else {?>
       <p><?= $errors['picture'] = 'Veuillez réessayer, l\'envoi de votre fichier n\'a pas abouti'?></p><?php;}
    }
    // If the $formSubmitted is true and that no errors remain, display the informations registered by the user.
    if ($formSubmitted && count($errors) == 0) {?>
        <p><?= $success ?></p>
        <?php ;}
} ?>
$errors = [];
$nameRegex = '/\w+/';
$passwordRegex = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])?[\w!@#$%^&*]{8,}$/';

if(isset($_POST['checkmail'])){
     $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $user = new User();
        $user->email = $email;
        if($user->checkEmail()){
            exit('notOk');
        }
        exit('ok');
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmit = true;
    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
    if (empty($firstname) || !preg_match($nameRegex, $firstname)) {
        $errors['firstname'] = 'Le prénom est invalide !';
    }
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    if (empty($lastname) || !preg_match($nameRegex, $lastname)) {
        $errors['lastname'] = 'Le nom est invalide !';
    }
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (empty($email) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Le mail est invalide !';
    }

    $password = trim($_POST['password']);
    if (empty($password) || !preg_match($passwordRegex, $password)) {
        $errors['password'] = 'Le mot de passe doit comporter au moins 8 caractères !';
    }
    $password_confirmation = trim($_POST['password_confirmation']);
    if (empty($password) || $password != $password_confirmation) {
        $errors['password_confirmation'] = 'Les mots de passe sont differents !';
    }
    if (!isset($_POST['terms'])) {
        $errors['terms'] = 'Veuillez accepter les conditions d\'utilisation !';
    }

    if (count($errors) == 0) {
        $user = new User($firstname, $lastname, $email, password_hash($password, PASSWORD_BCRYPT));

        try {
            $user->create();
        } catch (PDOException $ex) {
            echo 'La création du compte a échouée !' . $ex->getMessage();
            die();
        }
    }
}

require_once ROOT . '/Views/register.php';

    