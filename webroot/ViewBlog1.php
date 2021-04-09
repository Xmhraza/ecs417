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

//bubbleSort($array);

foreach ($array as $arr) {
    echo $arr[0];
    
}





function swapValues2( $array, $dex, $dex2 ) {
    list($array[$dex],$array[$dex2]) = array($array[$dex2], $array[$dex]);
    return $array;
}
 

 
function bubbleSort( $array)
{


    for( $out=0, $size = sizeof($array); $out < $size - 1 ; $out++ )  {
        for( $in = $out + 1; $in < $size; $in++ ) {
              if (strtotime($array[ $out ]) > strtotime($array[ $in ])) {
                $array = swapValues2($array, $out, $in);
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
          
    
     for ($i = 0; $i < sizeof($array); $i++) {

       $date1 = $array[$i][0];
       $time1 = $array[$i][2];
         
       $s = "SELECT Title, Blog, Date, Time from Blog where Date = '$date1' AND Time = '$time1'";

       $result = mysqli_query($conn, $s);
       $num = mysqli_num_rows($result);

        if ($num > 0) {
          while ($row = $result -> fetch_assoc()) {
            echo $row["Title"];
            echo $row["Blog"];
            echo $row["Date"];
            echo $row["Time"];

          } 
            
        } else {
          echo "nothing found";
        }
     }
    
      

    
      
      
      
      ?>
   </body>

</html>