<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียด</title>
</head>
<body>
<?php
    include("server.php");
    mysqli_query($conn, "USE board;");

    $qno = $_GET["item"];

    $query = "SELECT * from question where qno=$qno;";
    $result = mysqli_query($conn, $query);
    $dbarr = mysqli_fetch_array($result);

    echo "$dbarr[qtopic]<br>";
    echo "<table bgcolor='grey' width=100%><tr><td>$dbarr[qdetail]<br>โดย&nbsp;<b>$dbarr[qname]</b></td></tr></table><br>";

    $query = "SELECT * from answer where aquestionno=$qno;";
    $result = mysqli_query($conn, $query);
    while ($dbarr = mysqli_fetch_array($result)) {
        echo "คำตอบที่&nbsp;<b>$dbarr[ano]</b><br>";
        echo "<table bgcolor='pink' width=100%><tr><td>$dbarr[adetail]<br>โดย&nbsp;<b>$dbarr[aname]</b></td></tr></table><br>";
    }

    echo "<b>เพิ่มคำตอบ</b>";
    echo "<form action=add_answer.php?item=$qno method=post>";
?>
        <textarea name="adetail" cols="30" rows="10"></textarea><br>
        ชื่อผู้ตอบ: <input type="text" name="aname">
        <input type="submit" name='submit' value="ตกลง">
    </form>
</body>
</html>