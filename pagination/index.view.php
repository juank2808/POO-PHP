<?php
require('connection.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagination</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1>Articles</h1>
      <section class="articles">
        <ul>
          <?php foreach ($sql as $article): ?>
            <li><?php echo $article['id'] .' - '. $article['a_title'];?></li>
          <?php endforeach; ?>
        </ul>
      </section>
      <section class="pagination">
        <ul>
          <?php if ($page == 1): ?>
            <li class="disabled"><a href="#">&laquo;</a></li>
          <?php else: ?>
            <li><a href="?page=<?php echo $page -1 ?>">&laquo;</a>
          <?php endif; ?>
          <?php
            for ($i=1; $i <= $n_Page; $i++) {
              if ($page == $i) {
                echo "  <li class='active'><a href='?page=$i'>$i</a></li>";
              }else{
                echo "<li><a href='?page=$i'>$i</a></li>";
              }
            }
           ?>
           <?php if ($page == $n_Page): ?>
             <li class="disabled"><a href="#">&raquo;</a></li>
           <?php else: ?>
             <li><a href="?page=<?php echo $page +1 ?>">&raquo;</a>
           <?php endif; ?>
        </ul>
      </section>
    </div>
  </body>
</html>
