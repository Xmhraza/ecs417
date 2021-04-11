<?php

  session_start();

    include("database.php");

    $title = $_SESSION['title'];
    $Blog = $_SESSION['Blog'];
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $_SESSION['date'] = date('Y-m-d');
    $_SESSION['time'] = date('H:i:s');


 

function Edit() {
  header('location:EditedPost.php');
}

function Post() {
  include("database.php");
  $sql = "INSERT INTO Blog (Title, Blog, Date, Time) 
        VALUES ('$title', '$Blog', '$date', '$time')";
  if ($conn->query($sql) === TRUE) {
    header('location:BlogControl.php');
  } else {            
        echo "Error: " . $sql . "<br>" . $conn->error;         
   } 
}

 
 ?>

 <html>

 <header class="headBorder">
      <meta charset="utf-8">
      <link rel="stylesheet" href="blog.css">
 
    </header>

       <section class="update">
         <?php echo $title . " "; ?> <br>
           <?php echo $Blog; ?> <br>
           <?php echo $date; ?> <br>
           <?php echo $time; ?> <br>

        </section>  

        <form>
        <button name="subject" type="button" onclick="Post()">Post</button>
        <button name="subject" type="button" onclick="Edit()">Edit Further</button>

        </form>
 </html>

