<?php

include_once("database.php");

$s = "SELECT Title, Blog, Date, Time from Blog" ;

$query = mysqli_query($conn ,$s);

$ChosenMonth = $_POST['Month'];
$UpdMonth = substr($ChosenMonth ,0,3);
$navCheck = "";



 ?>

<html>
    <header class="headBorder">
      <meta charset="utf-8">
      <link rel="stylesheet" href="blog.css">
 
    </header>

   <body class="form">

   <nav>
       <em class="initial"><?php echo $ChosenMonth ?></em> 
   </nav>
   
   <?php

   

    while ($row = mysqli_fetch_assoc($query)) {


        $timestamp = strtotime($row["Date"]);
        $month = date("M", $timestamp);

        if ($month == $UpdMonth) {

            

    ?>

    
     
       <section class="update">
           <?php echo $row["Title"] . " "; ?> <br>
           <?php echo $row["Blog"]; ?> <br>
           <?php echo $row["Date"]; ?> <br>
           <?php echo $row["Time"]; ?> <br>

       </section> 
<?php
        }    
    }
    
    
 ?>

   </body>

</html>