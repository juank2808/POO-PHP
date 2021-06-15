<?php session_start();
require('db/db-connection.php');
$conn = new Connection();
$conn = $conn->connect();
if (isset($_SESSION['user'])) {
  header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
  $pass = $_POST['password'];
  $pass2 = $_POST['password2'];

  $error = '';
$statement = '';
  if (empty($user) or empty($pass) or empty($pass2)) {
    $error.= '<li>Please, write the data correctly!</li>';
  }else {
    $statement = $conn->prepare('SELECT * FROM users = :user LIMIT 1');
    $statement->execute(array(':user'=>$user));

    $result = $statement->fetch();

    if ($result !=false) {
      $error.='<li>The user '.$user.' already exists! </li>';
    }

    $pass = hash('sha512', $pass);
    $pass2 = hash('sha512', $pass2);

    if ($pass != $pass2) {
      $error.= "<li> The passwords do not match! </li>";
    }
  }
  if ($error == '') {
    $statement = $conn->prepare(
      "INSERT INTO users (id,userName, u_password) VALUES (null, :user, :password)");

      $statement->execute(array(":user"=> $user,
                                ":password"=> "$pass"));

      header('Location: login.php');
  }
}
require('views/register.view.php');
 ?>
