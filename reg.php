
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Success</title>
    <link rel="stylesheet" href="reset.css">
  </head>
  <body>
    <?php
      session_start();
      require('dbconn.php');
      $Firstname= stripslashes($_REQUEST['Firstname']);
      $Firstname= mysqli_real_escape_string($conn,$Firstname);
      $Surname= stripslashes($_REQUEST['Surname']);
      $Surname= mysqli_real_escape_string($conn,$Surname);
      $Email= stripslashes($_REQUEST['Email']);
      $Email= mysqli_real_escape_string($conn,$Email);
      $Password= stripslashes($_REQUEST['Password']);
      $Password= mysqli_real_escape_string($conn,$Password);

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $sql = "INSERT INTO USERS (firstName, lastName, email, password)
        VALUES ('$Firstname', '$Surname', '$Email', '$Password')";
        if ($conn->query($sql) === TRUE)
         {
           echo "<div class='form'>
           <h3>You have registered successfully.</h3>
           <br/>Click here to <a href='Login.html'>Login</a></div>";
         }
         else
         {
          echo "Error: " . $sql . "<br>" . $conn->error;
         }
     $conn->close();
     }
    ?>
  </body>
</html>
