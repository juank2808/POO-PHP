<?php session_start();
require('db/db-connection.php');

if (isset($_SESSION['user'])) {
  header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = filter_var(mb_strtolower($_POST['user']), FILTER_SANITIZE_STRING);
  $pass = $_POST['password'];
  $pass2 = $_POST['password2'];

  $error = '';

  if (empty($user) or empty($pass) or empty($pass2)) {
    $error.= '<li>Please, write the data correctly!</li>';
  }else {
    $conn = new Connection();
    $conn = $conn->connect();
  }
}
require('views/register.view.php');
 ?>
