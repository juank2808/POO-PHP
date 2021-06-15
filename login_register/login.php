<?php session_start();
require('db/db-connection.php');

$conn = new Connection();
$conn = $conn->connect();
$error='';
if (isset($_SESSION['user'])) {
  header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = filter_var(strtolower($_POST['user']),FILTER_SANITIZE_STRING);
  $pass = $_POST['password'];
  $pass = hash('sha512', $pass);

  $statement = $conn->prepare('SELECT * FROM users WHERE userName=:user and u_password =:pass');

  $statement->execute(array(
    ':user'=>$user,
    ':pass'=>$pass
  ));

  $result= $statement->fetch();
  
  var_dump($result);
  if ($result !== false) {
    $_SESSION['user']=$user;
    header('Location: index.php');
  }else{
    $error.="<li>The user or password are incorrect</li>";
  }
}

require ('views/login.view.php');
 ?>
