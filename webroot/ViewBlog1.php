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

  array_push($array, $row['Date'], $row['Time']);

}

$count = sizeof($array);

for ($i = 0; $i < $count; $i++) {

  echo $array[$i];

}

function swapValues2( $array, $dex, $dex2 ) {
    list($array[$dex],$array[$dex2]) = array($array[$dex2], $array[$dex]);
    return $array;
}
 

 
function bubbleSort( $array)
{
    for( $out=0, $size = count($array); $out < $size - 1 ; $out++ )  {
        for( $in = $out + 1; $in < $size; $in++ ) {
              if (strtotime($array[ $out ]) > strtotime($array[ $in ])) {
                $array = swapValues2($array, $out, $in);
             }
        }
    }
    return $array;  
}