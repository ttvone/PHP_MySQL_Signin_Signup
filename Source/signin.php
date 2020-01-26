<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signin page</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container">
        <form class="form-box" action="./actions/signup.php" method="POST">
            <div class="form-input">
                <input type="text" placeholder="ชื่อผู้ใช้งาน" name="username" required>
            </div>
            <div class="form-input">
                <input type="password" placeholder="รหัสผ่าน" name="password" required>
            </div>
            <div class="form-input button">
                <input type="submit" value="เข้าสู่ระบบ">
            </div>
            <div class="form-link">
                ยังไม่มีบัญชีใช่หรือไม่?
                <a href="./signup.php">สมัครสมาชิก</a>
            </div>
        </form>
    </div>
</body>

</html>