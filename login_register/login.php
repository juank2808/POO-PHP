<?php session_start();
require('db/db-connection.php');

$conn = new Connection();
$conn = $conn->connect();
$error='';
if (isset($_SESSION['user'])) {
  header('Location: index.php');
}

if ($_SERVER[REQUEST_METHOD] == 'POST') {
  $user = filter_var(strtolower($_POST['user']),FILTER_SANITIZE_STRING);
  $pass = $_POST['password'];
  $pass = hash('sha512', $pass);

  $statement = $conn->prepare('SELECT * users WHERE userName=:user and u_password =:pass');

  $statement->execute(array(
    ':user'=>$user,
    ':pass'=>$pass
  ));
  $result= $statement->fetch();
  if ($result == false) {
    $error.="<li>The user or password are incorrect</li>"
  }else{
    $_SESSION['user']=$user;
    header('Location: index.php');
  }
}

require ('views/login.view.php');
 ?>
