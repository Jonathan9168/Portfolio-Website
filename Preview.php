<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Blogs</title>
    <link rel="stylesheet" href="reset.css">
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <div class="info">
            <li><a href="Home.html">Home</a></li>
            <li><a href="About.html">About Me</a></li>
            <li><a href="Portfolio.html">Portfolio</a></li>
            <li><a href="Login.html">Login</a></li>
          </div>
          <div class="logos">
            <li><a href="https://github.com/Jonathan9168"><img class = "git" src="git.png" alt="Youtube" ></a></li>
            <li><a href="https://www.youtube.com/channel/UC4v3V4HS0-CnxDU3r8IVCSg/featured"><img class = "yt" src="yt.png" alt="Youtube" ></a></li>
          </div>
        </ul>
      </nav>
    </header>

    <h1 class="Main">Blog Preview</h1>
    <div class="Blogs">

    <?php
      session_start();
      require('dbconn.php');
      include('Auth.php');

      $dateArr = array();
      $result = mysqli_query($conn,'SELECT * FROM BLOGS');

      while ($row = mysqli_fetch_assoc($result))
      {
        $DataArr[] = $row;
      }

      $sorted = false;

      while($sorted != true)
      {
        $sorted = true;
        for ($count = 0; $count < count($DataArr);$count++)
        {
          if ($DataArr[$count]['time'] < $DataArr[$count + 1]['time'])
          {
            $temp = $DataArr[$count];
            $DataArr[$count] = $DataArr[$count + 1];
            $DataArr[$count + 1] = $temp;
            $sorted = false;
          }
        }
      }

      if (count($DataArr) === 0)
      {
            header("Location: AddPost.php");
      }
      else
      {
        $fade = 1.5;

        $fade = $fade + 1;

        for ($count = 0; $count < count($DataArr);$count++)
        {
          $content = $DataArr[$count]['content'];
          $title = $DataArr[$count]['title'];
          $time = $DataArr[$count]['time'];

          echo "
          <article style = 'animation: test1 $fade" ."s' class='blog'>
                  <h2>$time</h2>
                  <h3 class='title'>$title</h3>
                  <p>$content</p>
                  </article>
              ";
            $fade = $fade + 1;
        }
      }
      ?>
      </div>
  </body>
</html>
