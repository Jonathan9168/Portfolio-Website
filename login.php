<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="reset.css">
  </head>
  <body>
    <?php
      session_start();
      require('dbconn.php');
      $Email= stripslashes($_REQUEST['Email']);
    	$Email= mysqli_real_escape_string($conn,$Email);
    	$Password= stripslashes($_REQUEST['Password']);
    	$Password= mysqli_real_escape_string($conn,$Password);

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $sql = "SELECT * FROM USERS WHERE email='$Email'
	      AND password='$Password'";

        $result= mysqli_query($conn,$sql);
	      $rows= mysqli_num_rows($result);
	      $Get=mysqli_fetch_assoc($result);
	      $ID = $Get['ID'];

        if($rows==1)
        {
		        $_SESSION['ID'] = $ID;
		        header("Location: AddPost.php");
	      }
        else
        {
		        echo "<div class='form'>
		        <h3>Username/Password Is Incorrect.</h3>
		        <br/>Click Here To <a href='Login.html'>Login</a></div>";
        }
        $conn->close();
     }
    ?>
  </body>
</html>
