<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Blog</title>
    <link rel="stylesheet" href="reset.css">
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <div class="info">
            <?php
            session_start();
            if(isset($_SESSION['ID']))
            {
              echo '<li><a href="Home.php">Home</a></li>
                    <li><a href="About.php">About Me</a></li>
                    <li><a href="Portfolio.php">Portfolio</a></li>
                    <li><a href="AddPost.php">Add Post</a></li>
                    <li><a href="logout.php">Logout</a></li>';
            }
            else
            {
              echo '<li><a href="Home.php">Home</a></li>
                    <li><a href="About.php">About Me</a></li>
                    <li><a href="Portfolio.php">Portfolio</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                    <li><a href="Login.html">Login</a></li>';
            }
            ?>
          </div>
          <div class="logos">
            <li><a href="https://github.com/Jonathan9168"><img class = "git" src="git.png" alt="Youtube" ></a></li>
            <li><a href="https://www.youtube.com/channel/UC4v3V4HS0-CnxDU3r8IVCSg/featured"><img class = "yt" src="yt.png" alt="Youtube" ></a></li>
          </div>
        </ul>
      </nav>
    </header>

    <form class="RegistrationForm" name="RegistrationForm" action="reg.php" method="POST" align = "center">
      <h1>Create Account</h1>
      <input id = "Firstname" type="text" name="Firstname" placeholder="Firstname" required><br><br>
      <input id = "Surname" type="text" name="Surname" placeholder="Surname" required><br><br>
      <input type="email" name="Email" placeholder="Email" required/><br><br>
      <input id="tt"type="password" name="Password" placeholder="Password" pattern="(?=.*\d)(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase letter, and at least 8 or more characters" required/><br><br>
      <input id="ty"type="password" name="Confirm" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase letter, and at least 8 or more characters" required/><br><br>
      <input class = "b1" onclick="checkPassword()" type="submit" value="Submit" name="submit"/>
      <input class = "b2" onclick="checkClear()" type="reset" value="Clear" name="remove"/>
    </form>

    <script>
      function checkClear()
      {
        var checker = confirm("Are you sure you want to clear?");
        if (!checker)
        {
          event.preventDefault();
        }
      }
    </script>

    <script>
      var Password =   document.getElementById("tt");
      var Confirmation =   document.getElementById("ty");

      function checkPassword()
      {
        if(Password.value != Confirmation.value)
        {
          event.preventDefault();
          alert("Your passwords do not match!");
        }
      }
    </script>

  </body>
</html>
</html>
