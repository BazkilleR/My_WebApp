<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงชื่อเข้าใช้</title>
</head>
<body>
    <h1>ลงชื่อเข้าใช้</h1>
    <form action="login_db.php" method="post">
        ชื่อผู้ใช้: <input type="text" name="username"><br>
        รหัสผ่าน: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="ตกลง">
        <a href="register.php">สมัครสมาชิก</a>
    </form>
</body>
</html>