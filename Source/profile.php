<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile page</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container">
        <form class="form-box" action="./actions/signout.php" method="POST">
            <div class="form-input">
                <h4>เข้าสู่ระบบเรียบร้อยแล้ว</h4>
                <p>ยินดีต้อนรับคุณ</p>
            </div>

            <div class="form-input">
                <input type="text" placeholder="ชื่อผู้ใช้งาน">
            </div>
            <div class="form-input">
                <input type="password" placeholder="รหัสผ่าน">
            </div>
            <div class="form-input button">
                <input type="submit" value="ออกจากระบบ">
            </div>
        </form>
    </div>
</body>

</html>