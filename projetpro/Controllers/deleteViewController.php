<?php
session_start();
require_once '../Models/Avis.php';
require_once '../Models/DataBase.php';

$views = new Views();

$oneView = $views->delete();
if($success = true){
    header('Refresh:4; url=../Controllers/adminController.php', true, 303);
}

require_once '../Views/deleteView.php';