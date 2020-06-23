<?php
session_start();
require_once '../Models/Avis.php';
require_once '../Models/DataBase.php';

 $title = $text = $note = $publishDate = '';
 $errors = [];

 $textRegex = '/\w+/';
 $noteRegex = '/d{2}\/\d{2}/';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmit = true;
// verif du champs titre
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
    if (empty($title) || !preg_match($textRegex, $title)) {
        $errors['title'] = 'Le titre comprend des caractères inappropriés !';
    }
// veriff du champ texte
    $texte = trim(filter_input(INPUT_POST, 'texte', FILTER_SANITIZE_STRING));
    if (empty($texte) || !preg_match($textRegex, $texte)) {
        $errors['texte'] = 'Le texte de l\'avis comprend des caractères inappropriés !';
    }
// veriff du champ note
    $note = trim(filter_input(INPUT_POST, 'note', FILTER_SANITIZE_INT));
    if (empty($note) || !preg_match($dateRegex, $note)) {
    $errors['note'] = 'Le texte de l\'avis comprend des caractères inappropriés !';
}
     if (count($errors) == 0) {
        $view = new View($title, $texte, $note);
       
        try {
            $view->create();
            $success = true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            $view->db->rollBack();
        }
    }
}

require_once '../Views/addreview.php';