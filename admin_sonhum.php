<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    Đăng nhập: <br>
    <form action="admin_sonhum.php" method="post">
        <label for="">Tài khoản:</label>
        <input type="text" name="acc">
        <br>
        <label for="">Mật khẩu</label>
        <input type="text" name="pass">
        <br>
        <input name="login" type="submit" value="Đăng nhập">
    </form>
    <?php

        if(isset($_POST['login'])){
            if(isset($_POST['acc']) || isset($_POST['pass'])){
                $tk = $_POST['acc'];
                $mk = $_POST['pass'];

                if($tk == "admin" && $mk == "d9eef891db05cf9f8fd4be0134beb90e3a845ab7"){
                    $_SESSION['acc'] = $tk;
                    header("Location: ti-gia.php");
                }else if($tk == "" || $mk == ""){
                    echo "Vui lòng điền đầy đủ thông tin";
                }else{
                    echo "Sai thông tin tài khoản hoặc mật khẩu. Vui lòng nhập lại!";
                };
            }else{
                echo "Lỗi!";
            };
        }
    ?>
</body>
</html>