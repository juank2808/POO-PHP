<?php

function visit_counter(){
  $file = 'counter.txt';
  $counter=0;
  if (file_exists($file)) {
    $counter = file_get_contents($file) + 1;
    file_put_contents($file, $counter);

    return $counter;

  }else {
    file_put_contents($file, 1);
    return 1;
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/styles.css">
     <title>Visit counter</title>
   </head>
   <body>
     <h1>Visit Counter</h1>
     <div class="visitors">
       <p class="number"><?php echo visit_counter(); ?></p>
       <p class="text">Visitors</p>
     </div>
   </body>
 </html>
