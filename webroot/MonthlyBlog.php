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
       <em class="initial"><?php echo $ChosenMonth ?></em><br>
   </nav>
   
   <?php

   

    while ($row = mysqli_fetch_assoc($query)) {


        $timestamp = strtotime($row["Date"]);
        $month = date("M", $timestamp);

        if ($month == $UpdMonth) {

            

    ?>

    
     
       <section class="update">
           <section class="title"><?php echo $row["Title"] . " "; ?></section> <br><hr>
           <?php echo $row["Blog"]; ?> <br><br>
         <section class="sizeUpdate">  
            <?php echo $row["Date"]; ?> <br>
           <?php echo $row["Time"]; ?> <br>
        </section>

       </section> 
<?php
        }    
    }
    
    
 ?>

   </body>

</html>