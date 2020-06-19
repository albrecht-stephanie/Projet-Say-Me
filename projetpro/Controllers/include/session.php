// si aucune variable de session n'existe, on renvoi vers la page pour se logguer
if (!isset($_SESSION['auth']['id'])){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/Controllers/connexionController.php');
}