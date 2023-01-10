<?php
    include("server.php");
    mysqli_query($conn, "USE user_db;");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT username,password from user where username='$username';";
    $result = mysqli_query($conn, $query);
    $dbarr = mysqli_fetch_array($result);
    if ($username==$dbarr[username] && $password==$dbarr[password]) {
        header("location: home_login.php");
    } else {
        echo "fail";
    }
?>