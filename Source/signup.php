<?php require_once './shareds/unsession.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup page</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container">
        <form class="form-box" action="./actions/signup.php" method="POST">
            <div class="form-input">
                <input type="text" placeholder="ชื่อและนามสกุล" name="name" required>
            </div>
            <div class="form-input">
                <input type="text" placeholder="ชื่อผู้ใช้งาน" name="username" required>
            </div>
            <div class="form-input">
                <input type="password" placeholder="รหัสผ่าน" name="password" id="pass" required>
            </div>
            <div class="form-input">
                <input type="password" placeholder="ยืนยันรหัสผ่าน" name="cpassword" id="cpass" required>
            </div>
            <div class="form-input button">
                <input type="submit" value="สมัครสมาชิก">
            </div>
            <div class="form-link">
                มีบัญชีอยู่แล้วใช่หรือไม่?
                <a href="./signin.php">เข้าสู่ระบบ</a>
            </div>
        </form>
    </div>

    <script>
        var pass = document.getElementById('pass');
        var cpass = document.getElementById('cpass');
        pass.onchange = comparePasswordValid;
        cpass.oninput = comparePasswordValid;
        function comparePasswordValid() {
            if (pass.value != cpass.value) cpass.setCustomValidity('password and confirm password is not match.');
            else cpass.setCustomValidity('');
        }
    </script>
</body>

</html>