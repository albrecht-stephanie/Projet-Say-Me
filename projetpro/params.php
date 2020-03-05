<?php
define('USER', 'albrecht-stephanie');
define('PASSWD', '');
define('HOST', 'localhost');
define('DB', 'views');

function connectDb() {
    
    $dsn = 'mysql:dbname=' . DB . ';host=' . HOST;
    try {
        $db = new PDO($dsn, USER, PASSWD, ['PDO::ATTR_ERRMODE'=> 'PDO::ERRMODE_EXCEPTION']);
        return $db;
    } catch (Exception $ex) {
        die('La connexion à la bdd a échoué !');
    }
}
?>