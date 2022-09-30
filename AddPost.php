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
            <li><a href="Home.php">Home</a></li>
            <li><a href="About.php">About Me</a></li>
            <li><a href="Portfolio.php">Portfolio</a></li>
            <li><a href="Blog.php">Blog</a></li>
            <li><a href="Register.php">Register</a></li>
            <li><a href="logout.php">Logout</a></li>
          </div>
          <div class="logos">
            <li><a href="https://github.com/Jonathan9168"><img class = "git" src="git.png" alt="Youtube" ></a></li>
            <li><a href="https://www.youtube.com/channel/UC4v3V4HS0-CnxDU3r8IVCSg/featured"><img class = "yt" src="yt.png" alt="Youtube" ></a></li>
          </div>
        </ul>
      </nav>
    </header>

    <form class="Entry" name="Form" action="" method="POST" align = "center">
      <h1>Add Blog</h1>
      <input id = "title" type="text" name="BlogTitle" placeholder="Title"><br><br>
      <textarea id = "BigBox" rows="25" cols="110" name="BlogEntry" placeholder="Enter your text here"></textarea><br><br>
      <input class = "b1" onclick="subTest()" type="submit" value="Post" name="submit"/>
      <input class = "b1" onclick="Preview()" type="button" value="Preview" name="preview"/>
      <input class = "b2" onclick="check()" type="reset" value="Clear" name="remove"/>
    </form>

    <?php
      require('dbconn.php');
      include("Auth.php");

      $Date = date("Y-m-d");
      $Time = date("Y-m-d H:i:s");
      $Title= stripslashes($_REQUEST['BlogTitle']);
      $Title= mysqli_real_escape_string($conn,$Title);
      $Title= strip_tags("$Title");
      $Content= stripslashes($_REQUEST['BlogEntry']);
      $Content= mysqli_real_escape_string($conn,$Content);
      $Content= strip_tags("$Content");

      $_SESSION['time'] = $Time;

      if ($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $sql = "INSERT INTO BLOGS (date, time, title, content)
        VALUES ('$Date', '$Time', '$Title', '$Content')";
        if ($conn->query($sql) === TRUE)
         {
           header("Location: Blog.php");
         }
         else
         {
          echo "Error: " . $sql . "<br>" . $conn->error;
         }
         $conn->close();
     }
     ?>

     <div class="content1">
         <h1 class="Main1">Previews</h1>
         <div id ="previews"></div>
     </div>

     <script>
      function Preview()
      {
        var title = document.getElementById('title').value;
        var text = document.getElementById('BigBox').value;
        var date = new Date();

        var div = document.createElement('div');
        div.id = 'prev';

        document.getElementById('previews').appendChild(div);
        const parent = document.getElementById('prev');

        document.getElementById("prev").innerHTML += "<article id = 'custom' style = 'animation: test1 1.5s' class='blog'><h2>" + date + "</h2><h3 class='title'>" + title + "</h3> <p>" + text + "</p></article>";
        document.getElementById('previews').scrollIntoView();
      }
     </script>

    <script>
      function subTest()
      {
        var a = document.forms["Form"]["BlogTitle"].value;
        var b = document.forms["Form"]["BlogEntry"].value;

        if (a == "" || a == null)
        {
          document.getElementById("title").style.background = "grey";
          document.getElementById("title").style.color = "white";
          event.preventDefault();
          alert("Fill in the highlighted fields!");
        }
        if (b == "" || b == null)
        {
          document.getElementById("BigBox").style.background = "grey";
          document.getElementById("BigBox").style.color = "white";
          event.preventDefault();
          alert("Fill in the highlighted fields!");
        }
      }
    </script>

    <script>
      function check()
      {
        var checker = confirm("Are you sure you want to clear?");
        if (!checker)
        {
          document.getElementById("BigBox").style.background = "white";
          document.getElementById("title").style.background = "white";
          document.getElementById("BigBox").style.color = "black";
          document.getElementById("title").style.color = "black";
          event.preventDefault();
        }
        else
        {
          document.getElementById("BigBox").style.background = "white";
          document.getElementById("title").style.background = "white";
          document.getElementById("BigBox").style.color = "black";
          document.getElementById("title").style.color = "black";
        }
      }
    </script>

  </body>
</html>
