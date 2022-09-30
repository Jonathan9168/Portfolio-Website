<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
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
              echo '<li><a href="About.php">About Me</a></li>
                    <li><a href="Portfolio.php">Portfolio</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                    <li><a href="AddPost.php">Add Post</a></li>
                    <li><a href="logout.php">Logout</a></li>';
            }
            else
            {
              echo '<li><a href="About.php">About Me</a></li>
                    <li><a href="Portfolio.php">Portfolio</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                    <li><a href="Login.html">Login</a></li>
                    <li><a href="Register.php">Register</a></li>';
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


    <a href="About.php"><p class="Initials">Jonathan</p></a>
  </body>














</html>
