<?php

  session_start();

    include("database.php");

    
    $email = $_POST['Email'];
    $pwd = $_POST['password'];

    mysqli_select_db($conn, 'USERS');

    $s = "SELECT * from USERS where email = '$email' AND password = '$pwd'";

    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        header('location:AddPost.html');
    } else {
        header('location:login.html');
    }