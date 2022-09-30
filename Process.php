<!DOCTYPE html>
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
           <?php
           session_start();
           if(isset($_SESSION['ID']))
           {
             echo '<li><a href="Home.php">Home</a></li>
                   <li><a href="About.php">About Me</a></li>
                   <li><a href="Portfolio.php">Portfolio</a></li>
                   <li><a href="Blog.php">Blog</a></li>
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

   <div class="content">
   <h1 class="Main">Blogs</h1>
   <div class="Blogs">

     <form method = "POST" name= "month" action= "Process.php">
       <input type="hidden" name="search" value="submit">
       <select name="month">
       <option value="" disabled selected>Select Month</option>
       <option value='1'>January</option>
       <option value='2'>February</option>
       <option value='3'>March</option>
       <option value='4'>April</option>
       <option value='5'>May</option>
       <option value='6'>June</option>
       <option value='7'>July</option>
       <option value='8'>August</option>
       <option value='9'>September</option>
       <option value='10'>October</option>
       <option value='11'>November</option>
       <option value='12'>December</option>
       </select>
       <input type=submit value=Submit>
     </form>
   <?php
     require('dbconn.php');

     $result = mysqli_query($conn,"SELECT * FROM BLOGS WHERE MONTH(date) = '".$_POST['month']."'");

     if (mysqli_num_rows($result) > 0)
     {
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
             if (@$DataArr[$count]['time'] < @$DataArr[$count + 1]['time'])
             {
               $temp = $DataArr[$count];
               $DataArr[$count] = $DataArr[$count + 1];
               $DataArr[$count + 1] = $temp;
               $sorted = false;
             }
           }
         }

         $fade = 1.5;
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
     else
     {
       echo "<br><br>No Entries found for this month.";
     }
     ?>

     </div>
     </div>
 </body>
</html>
