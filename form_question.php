<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างกระทู้</title>
</head>
<body>
    <h1>สร้างกระทู้</h1>
    <form action="insert_question.php" method="post">
        ชื่อกระทู้: <input type="text" name="qtopic"><br>
        รายละเอียด:<br>
        <textarea name="qdetail"cols="30" rows="10"></textarea><br>
        ชื่อผู้ตั้งกระทู้: <input type="text" name="qname"><br>
        <input type="submit" name="submit" value="ตกลง">
    </form>
</body>
</html>