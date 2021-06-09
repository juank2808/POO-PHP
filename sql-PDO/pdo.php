<?php
$id = $_GET['id'];
try {
  $connect = new PDO('mysql:host=127.0.0.1;dbname=PDO-php','root','');
  echo "Done! <br/>";
  // $res = $connect->query('SELECT * from users');
  //
  // foreach ($res as $row) {
  //   var_dump($row['userName']);
  // }
  $sta = $connect->prepare('SELECT * FROM users WHERE id = :id');
  $sta->execute(
    array(':id'=>$id)
  );
  $res = $sta->fetch();
  var_dump($res);
  // To show all
  // $res = $sta->fetchAll();
  // foreach ($res as $row) {
  //   var_dump($row['name']);
  // }
}catch(PDOException $e){
  echo "ERROR: ".$e->getMessage();
}

 ?>
