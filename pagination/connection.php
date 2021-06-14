<?php
try {
  $conn = new PDO('mysql:host=127.0.0.1;dbname=PDO-php','root','');

} catch (PDOException $e) {
  echo "Error:". $e->getMessage();
}

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1 ;
$PPP = 5;

$init = ($page > 1) ? ($page * $PPP - $php) : 0 ;

$sql = $conn->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $init, $PPP");

$sql->execute();

$sql = $sql->fetchAll();

if ($sql) {
  header ('Location: index.php');
}

require('index.view.php');
 ?>
