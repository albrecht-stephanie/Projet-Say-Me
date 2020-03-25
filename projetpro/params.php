<?php
/*
define('USER', '*');
define('PASSWD', '*');
define('HOST', 'localhost');
define('DB', '*');
*/
define('USER', '*');
define('PASSWD', '*');
define('HOST', 'localhost');
define('DB', '*');

/*define('USER', '*');
define('PASSWD', '*');
define('HOST', '*');
define('DB', '*');*/

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