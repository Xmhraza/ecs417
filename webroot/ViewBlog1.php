<?php

session_start();


include("database.php");

$s = "SELECT Date, Time from Blog" ;
// run query
$query = mysqli_query($conn ,$s);

// set array
$array = array();

// look through query
while ($row = mysqli_fetch_assoc($query)) {

  echo $row["Date"];
  
  $array[] = $row;
  
}


$count = sizeof($array);

$arrayFinal = array();
$arrayFinal = bubbleSort($array);






function swapValues2( $array, $dex, $dex2 ) {
    
  $temp = $array[$dex];
  $array[$dex] = $array[$dex2];
  $array[$dex2] = $temp;

    return $array;
}
 

 
function bubbleSort($array)
{


    for( $out=0, $size = sizeof($array); $out < $size - 1 ; $out++ )  {
        for( $in = $out + 1; $in < $size; $in++ ) {
              if (strtotime($array[$out]["Date"]) < strtotime($array[$in]["Date"])) {
                $array = swapValues2($array, $out, $in);
                echo "hello";
             } else if (strtotime($array[$out]["Date"]) == strtotime($array[$in]["Date"])) {
                  if (strtotime($array[$out]["Time"]) < strtotime($array[$in]["Time"])) {
                    $array = swapValues2($array, $out, $in);
                    echo "hello";
                  }
             }
        }
    }
    return $array;  
}

?>

<html>
<header class="headBorder">
      <meta charset="utf-8">
      <link rel="stylesheet" href="blog.css">
 
    </header>

   <body class="form">
      <?php 
          
    
     for ($i = 0; $i < sizeof($arrayFinal); $i++) {

       $date1 = $arrayFinal[$i]["Date"];
       $time1 = $arrayFinal[$i]["Time"];
         
       $s = "SELECT Title, Blog, Date, Time from Blog where Date = '$date1' AND Time = '$time1'";

       $result = mysqli_query($conn, $s);
       $num = mysqli_num_rows($result);

        if ($num > 0) {
          while ($row = $result -> fetch_assoc()) {
            ?>
          <section class="update">
         <?php echo $row["Title"] . " "; ?> <br>
           <?php echo $row["Blog"]; ?> <br>
           <?php echo $row["Date"]; ?> <br>
           <?php echo $row["Time"]; ?> <br>

           </section>  
<?php
          
          } 
            
        } else {
          echo "nothing found";
        }
     }
    
      

    
      
      
      
      ?>
   </body>

</html>