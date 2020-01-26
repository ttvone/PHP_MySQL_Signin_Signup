<?php require_once './shareds/profile.php'; ?>

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
                <input type="text" placeholder="ชื่อและนามสกุล" value="<?= $user_login['user_name'] ?>" readonly>
            </div>
            <div class="form-input">
                <input type="text" placeholder="ชื่อผู้งาน" value="<?= $user_login['user_username'] ?>" readonly>
            </div>
            <div class="form-input button">
                <input type="submit" value="ออกจากระบบ">
            </div>
        </form>
    </div>
</body>

</html>