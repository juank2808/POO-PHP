<?php session_start();
require('db/db-connection.php');
$conn = new Connection();
$conn = $conn->connect();
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
    $statement = $conn->prepare('SELECT * FROM users = :user LIMIT 1');
    $statement->execute(array(':user'=>$user));

    $result = $statement->fetch();
    print_r($result);
  }
}
require('views/register.view.php');
 ?>
