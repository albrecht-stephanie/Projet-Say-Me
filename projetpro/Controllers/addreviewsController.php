<?php
session_start();
//verifiaction users connecter pour poster un avis
if (!isset($_SESSION['auth']['login'])) {
    header('Location:../Controllers/connexionController.php');
}

require_once '../Models/Avis.php';
require_once '../Models/Article.php';
require_once '../Models/User.php';
require_once '../Models/DataBase.php';

//verification du formulaire et messge d'erreur
 $title = $text = $note = $publishDate = '';
 $errors = [];

 $textRegex = '/\w+/';
 $noteRegex = '/d{2}\/\d{2}/';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
// verif du champs titre
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
    if (empty($title) || !preg_match($textRegex, $title)) {
        $errors['title'] = 'Le titre comprend des caractères inappropriés !';
    }
// veriff du champ texte
    $textView = trim(filter_input(INPUT_POST, 'textView', FILTER_SANITIZE_STRING));
    if (empty($texte) || !preg_match($textRegex, $texte)) {
        $errors['texte'] = 'Le texte de l\'avis comprend des caractères inappropriés !';
    }

//verif du champ note
    $note = trim(filter_input(INPUT_POST, 'note', FILTER_SANITIZE_INT));
    if (empty($note) || !preg_match($noteRegex, $note)) {
    $errors['note'] = 'Le texte de l\'avis comprend des caractères inappropriés !';
    }


// on récupère l'id de l'article sur lequel l'avis va être posté
    $oneArticle = new Article();
    $id_articles = filter_input(INPUT_GET, 'article', FILTER_SANITIZE_NUMBER_INT);
    $oneArticle->id = $id_articles;
    $oneArticle = $oneArticle-> getOneById();


// et l'id de l'user déposant l'avis
    $users = new users();
    $id_users = $_SESSION['auth']['id'];
    $users->id = $id_users;
    $users->getOne();
    

// verif si erreur ou non et selon exécution et création d'un nouvel avis
     if (count($errors) == 0) {
        $view = new View($title, $textView, $note, $publishDate, $id_users, $id_articles);
       
        try {
            $view->create();
            $success = true;
            $sleep = 4;
            header('Refresh:' . $sleep . ';http://../Controllers/accueilController.php');

        } catch (PDOException $ex) {
            echo 'Votre avis n\'a pas pu être transmis pour validation.' . $ex->getMessage();
            die();
        }
    }
}    
// on verifie d'avoir la référence de l'article sur lequel on va deposer un avis
if (isset($_GET['article'])){
    $oneArticle = new article();
    $oneArticle->id = filter_input(INPUT_GET, 'article', FILTER_SANITIZE_STRING);
    $oneArticle->getOneById();
    
    require_once '../Views/addreview.php';
}
else {
    header('Location: ../Controllers/accueilController.php');
}

