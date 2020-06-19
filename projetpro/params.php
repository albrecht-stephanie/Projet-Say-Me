<?php
/*
define('USER', 'eric');
define('PASSWD', 'toor');
define('HOST', 'localhost');
define('DB', 'sayme');
*/
define('USER', 'albrecht-stephanie');
define('PASSWD', 'chaton240581');
define('HOST', 'localhost');
define('DB', 'sayme');

/*define('USER', 'c9am_stephaniea');
define('PASSWD', 'evwpdLSQB@22F');
define('HOST', '54.37.71.121');
define('DB', 'c26sayme');*/

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