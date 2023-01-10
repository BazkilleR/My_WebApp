<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้ากระทู้</title>
</head>
<body>
<?php
    include("server.php");
    mysqli_query($conn, "USE board;");

    $query = "SELECT * from question;";
    $result = mysqli_query($conn, $query);
    echo "<h1>หน้าหลักกระทู้</h1>";
    echo "<hr>";
    while ($dbarr = mysqli_fetch_array($result)) {
        echo "&nbsp;<b>$dbarr[qno]</b>";
        echo "&nbsp;&nbsp;<b><a href='show_detail.php?item=$dbarr[qno]'>$dbarr[qdetail]</a></b>";
        echo "&nbsp;โดย&nbsp;<b>$dbarr[qname]</b>";
        echo "<hr>";
    }
    echo "<a href='form_question.php'>เพิ่มกระทู้</a><br>";
    echo "<a href='home_login.php'>หน้าหลัก</a>";
?>
</body>
</html>