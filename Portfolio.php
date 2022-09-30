<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
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
                    <li><a href="Blog.php">Blog</a></li>
                    <li><a href="AddPost.php">Add Post</a></li>
                    <li><a href="logout.php">Logout</a></li>';
            }
            else
            {
              echo '<li><a href="Home.php">Home</a></li>
                    <li><a href="About.php">About Me</a></li>
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

    <figure class = "proj1">
      <img class="adv" src="adv.jpg" alt="Adventure Project">
      <figcaption>Snapshot of OOP Mini Adventure Game</figcaption>
    </figure>

    <figure class="proj2">
      <pre style="word-wrap: break-word; white-space: pre-wrap;">
You played a total of: 9 round(s)
You scored a total of: 264 point(s)
---------------------------------------------------------------------
That's an average of: 29 point(s) per round
You chose a correct answer: 77.77777777777779% of the time
---------------------------------------------------------------------
You chose a total of: 2 correct answer(s)
You chose a total of: 2 incorrect answer(s)
You chose a total of: 5 pointless answer(s)
----------------------------------------------------------------------
           Ranking of points obtained in ascending order
----------------------------------------------------------------------
----------------------------------------------------------------------
Lowest scoring answer 1 scored: |0| point(s)
----------------------------------------------------------------------
----------------------------------------------------------------------
Lowest scoring answer 2 scored: |0| point(s)
----------------------------------------------------------------------
----------------------------------------------------------------------
Lowest scoring answer 3 scored: |0| point(s)
----------------------------------------------------------------------
----------------------------------------------------------------------
Lowest scoring answer 4 scored: |0| point(s)
----------------------------------------------------------------------
----------------------------------------------------------------------
Lowest scoring answer 5 scored: |0| point(s)
----------------------------------------------------------------------
----------------------------------------------------------------------
Lowest scoring answer 6 scored: |11| point(s)
----------------------------------------------------------------------
----------------------------------------------------------------------
Lowest scoring answer 7 scored: |53| point(s)
----------------------------------------------------------------------
----------------------------------------------------------------------
Lowest scoring answer 8 scored: |100| point(s)
----------------------------------------------------------------------
----------------------------------------------------------------------
Lowest scoring answer 9 scored: |100| point(s)
----------------------------------------------------------------------
      </pre>
      <figcaption>Snapshot of PP Mini Game summary</figcaption>
    </figure>

    <aside class="box">
      <iframe width="800" height="480" src="https://www.youtube.com/embed/PYnj5CSdDHY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </aside>

    <aside class="downloads">

      <h1>Project Downloads</h1>

      <button onclick="window.location.href='OOP Mini.zip'"class="btn1" type="submit">OOP Mini</button>
      <button onclick="window.location.href='PP Mini.zip'"class="btn2" type="submit">PP Mini</button>
      <button onclick="window.location.href='BillManager OOP.zip'"class="btn3" type="submit" >Bill Manager</button>

    </aside>
  </body>
</html>
