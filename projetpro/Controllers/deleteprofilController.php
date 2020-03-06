<?php
session_start();
require_once '../Models/User.php';
require_once '../Models/DataBase.php';
$users = new users();
if (isset($_GET['id'])) {
  if (!filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) || $_GET['id'] <= 0) {
    header('Location: ../Controllers/updateprofilController.php');
    exit();
  }
$users->id = (int) $_GET['id'];
$users->getOne();
  try {
    $users->db->beginTransaction();
    $users->delete();
    $_SESSION['deleteUser']['success'] = true;
    $_SESSION['deleteUser']['name'] = $users->firstname. ' ' .$users->lastname;
  } catch (PDOException $e){
      $_SESSION['deleteUser']['success'] = false;
  }
    header('Location: ../Controllers/updateprofilController.php');
exit();
}

