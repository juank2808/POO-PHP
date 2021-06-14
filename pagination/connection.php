<?php
try {
  $conn = new PDO('mysql:host=127.0.0.1;dbname=PDO-php','root','');

} catch (PDOException $e) {
  echo "Error:". $e->getMessage();
  die();
}

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1 ;
$PPP = 5;

$init = ($page > 1) ? ($page * $PPP - $PPP) : 0 ;


$sql = $conn->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $init, $PPP");

$sql->execute();

$sql = $sql->fetchAll();

if (!$sql) {
  header ('Location: index.php');
}

$totalArticles = $conn->query('SELECT FOUND_ROWS() as total');
$totalArticles =  $totalArticles->fetch()['total'];


$n_Page = ceil($totalArticles / $PPP);


// echo "$totalArticles";


 ?>
