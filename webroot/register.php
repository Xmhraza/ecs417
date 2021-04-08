<?php

  session_start();

    include("database.php");

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

   // mysqli_select_db($conn, 'USERS');

    $s = "SELECT * from USERS where email = '$email'";

    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        echo "Email already taken";
    } else {
        $sql = "INSERT INTO USERS (firstName, lastName, email, password) 
        VALUES ('$Fname', '$Lname', '$email', '$pwd')";     
        
        if ($conn->query($sql) === TRUE) {
            echo "Registration Complete";
        } else {            
              echo "Error: " . $sql . "<br>" . $conn->error;         
         }                 
    }