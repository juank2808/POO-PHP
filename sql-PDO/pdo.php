<?php

try {
  $connect = new PDO('mysql:host=127.0.0.1;dbname=PDO-php','root','');
  echo "Done!";
  $res = $connect->query('SELECT * from users');
}catch(PDOException $e){
  echo "ERROR: ".$e->getMessage();
}

 ?>
