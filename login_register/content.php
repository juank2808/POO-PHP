<<<<<<< HEAD
<?php session_start();

if (isset($_SESSION['user'])) {
  require('views/content.view.php');
}else{
  header('Location: login.php');
}



=======
<?php
require('views/content.view.php');
>>>>>>> ac43b8d20fd6528e36699666fba0a5334cee26bc
 ?>
