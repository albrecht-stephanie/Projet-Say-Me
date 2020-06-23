<?php
session_start();
require_once '../Models/Article.php';
require_once '../Models/DataBase.php';

     
$article = new article();



require_once '../Views/accueil.php';