<?php
require_once '../Models/User.php';
require_once '../Models/DataBase.php';
$errors = [];
$passwordRegex = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])?[\w!@#$%^&*]{8,}$/';

