<?php

  session_start();

    include("database.php");

    $title = $_POST['title'];
    $Blog = $_POST['Blog'];
    $date = date('Y-m-d');
    $time = ' ' + date('H:i:s');


        $sql = "INSERT INTO Blog (Title, Blog, Date, Time) 
        VALUES ('$title', '$Blog', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "Registration Complete";
} else {            
      echo "Error: " . $sql . "<br>" . $conn->error;         
 }      
        
                   
