<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Me</title>
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
                    <li><a href="#Self">About Me</a></li>
                    <li><a href="#SE">Skills/Experience</a></li>
                    <li><a href="#Contact">Contact</a></li>
                    <li><a href="Portfolio.php">Portfolio</a></li>
                    <li><a href="AddPost.php">Add Post</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="Register.php">Register</a></li>';
            }
            else
            {
              echo '<li><a href="Home.php">Home</a></li>
                <li><a href="#Self">About Me</a></li>
                <li><a href="#SE">Skills/Experience</a></li>
                <li><a href="#Contact">Contact</a></li>
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

    <div class="content">
      <article class="AboutMe" id="Self">
        <section>
          <h1>About Myself</h1>
          <p>
            I currently study Computer Science. I am interested in PC hardware; content creation; fitness and football.
            Finding ways to make things more efficient motivates me and excites me.
          </p>
        </section>
      </article>

      <article class="Education">
        <section>
          <h1>Education</h1>
          <ul>
            <li>10 GCSE's + 2 BTEC's</li>
            <li>A-Level (Computer Science, Maths and Physics)</li>
            <li>Currently Studying BSc(Hons) Computer Science at QMUL</li>
          </ul>
        </section>
      </article>

      <article class="Education" id="SE">
        <section>
          <h1>Skills/Experience</h1>
          <h2>Skills:</h2>
          <br>
          <ul>
            <li>Java, Python, HTML, CSS, Javascript [React/Preact], PHP, SQL</li>
            <li>Problem Solving</li>
            <li>Quick Learning </li>
            <li>Group Tasks</li>
          </ul>
          <h2>Experience:</h2>
          <br>
          <ul>
            <li>(Advice Arcade) Working with Team Members; Interacting with the public face to face and via phone calls. Office Admin like invoice processing and policy writeup.</li>
            <li>LSE 2 Week Easter School learning about things like personal branding</li>
            <li>PC Building via sourcing individual components</li>
            <li>Content creation. Mostly based on benchmarking or showcasing creations.</li>
          </ul>
        </section>
      </article>

      <article class="Contact" id="Contact">
        <section>
          <h1>Contact</h1>
          <address>
            <a href="mailto:ec20235@qmul.ac.uk">Get In Touch: ec20235@qmul.ac.uk</a>
          </address>
        </section>
      </article>
    </div>

  </body>
</html>
