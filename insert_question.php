<?php
    include("server.php");
    mysqli_query($conn, "USE board;");

    $qno = 1;
    $qtopic = $_POST["qtopic"];
    $qdetail = $_POST["qdetail"];
    $qname = $_POST["qname"];
    $result = mysqli_query($conn, "SELECT * from question;");
    while ($dbarr = mysqli_fetch_array($result)) {
        $qno++;
    }

    $query = "INSERT into question values ($qno,'$qtopic','$qdetail','$qname')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "ตั้งกระทู้เสร็จสิ้น<br>";
        echo "<a href='show_question.php'>หน้ากระทู้</a><br>";
        echo "<a href='homw_login.php'>หน้าหลัก</a>";
    } else {
        echo "fail";
    }
?>