<?php
    if (isset($_POST["submit"])) {
        include("server.php");
        mysqli_query($conn, "USE board;");

        $aquestionno = $_GET["item"];
        $ano = 1;
        $result = mysqli_query($conn, "SELECT * from answer where aquestionno=$aquestionno");
        while ($dbarr = mysqli_fetch_array($result)) {
            $ano++;
        }
        $adetail = $_POST["adetail"];
        $aname = $_POST["aname"];

        $query = "INSERT into answer values ($aquestionno,$ano,'$adetail','$aname');";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("location: show_detail.php?item=$aquestionno");
        } else {
            echo "fail";
        }
    }
?>