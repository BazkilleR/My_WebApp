<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
</head>
<body>
    <h1>สมัครสมาชิก</h1>
    <form action="register_db.php" method="post">
        ชื่อผู้ใช้: <input type="text" name="username"><br>
        ชื่อจริง: <input type="text" name="fname"><br>
        นามสกุล: <input type="text" name="lname"><br>
        รหัสผ่าน: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="ตกลง">
        <a href="login.php">ลงชื่อเข้าใช้</a>
    </form>
</body>
</html>