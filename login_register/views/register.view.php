<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=nom initial-scale=1.0; minumum-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <h1 class="title">Register</h1>
      <hr class="border"/>
      <form class="form" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
          <i class="icon left fa fa-user"></i><input type="text" name="user" value="" class="user" placeholder="New user">
        </div>
        <div class="form-group">
          <i class="icon left fa fa-lock"></i><input type="password" name="password" value="" class="password" placeholder="New password">
        </div>
        <div class="form-group">
          <i class="icon left fa fa-lock"></i><input type="password" name="password2" value="" class="pass_btn" placeholder="Sec password">
          <i class="send-btn fa fa-arrow-right" onclick="login.submit();"></i>
        </div>
      </form>
      <p class="text-register">
        Have you a account?
        <a href="login.php">Sign in</a>
      </p>
    </div>
  </body>
</html>
