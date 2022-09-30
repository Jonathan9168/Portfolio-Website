<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    if(!isset($_SESSION["ID"]))
    {
      header("Location:Login.html");
      exit();
    }
    ?>
  </body>
</html>
