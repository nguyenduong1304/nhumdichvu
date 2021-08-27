<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>admin</title>
</head>
<body>
    <h3 class="alert alert-warning text-center">Admin Đăng nhập: </h3>
    <br>
    <form style="margin-left: 25%;" class="col-md-6 justify-content-center" action="admin_sonhum.php" method="post">       
        
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Tài khoản:</label>
            <div class="col-sm-10">
                <input type="text" name="acc" class="form-control" id="staticEmail">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu:</label>
            <div class="col-sm-10">
                <input type="password" name="pass" class="form-control" id="inputPassword">
            </div>
        </div>
        <input name="login" class="form-control btn btn-success" type="submit" value="Đăng nhập">
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