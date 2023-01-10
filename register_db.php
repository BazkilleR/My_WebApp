<?php
    include("server.php");
    mysqli_query($conn, "USE user_db;");

    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $password = $_POST["password"];

    $query = "INSERT into user (username,fname,lname,password) values ('$username','$fname','$lname','$password');";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location: home_login.php");
    }
?>