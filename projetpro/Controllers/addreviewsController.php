<?php
session_start();
require_once '../Models/Avis.php';
require_once '../Models/DataBase.php';

     
$view = new view();

require_once '../Views/addreviews.php';