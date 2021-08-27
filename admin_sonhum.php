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
    <style>
        html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
</head>
<body class="text-center">
<main class="form-signin">
    <form action="admin_sonhum.php" method="post">       
        <h1 class="h3 mb-3 fw-normal">Vui lòng đăng nhập</h1>
        <div class="form-floating">
        <input type="text" name="acc" class="form-control" id="floatingInput">
        <label for="floatingInput">Tài khoản</label>
        </div>
        <div class="form-floating">
        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Mật khẩu</label>
        </div>
        </div>
        <input name="login" class="w-100 btn btn-lg btn-primary" type="submit" value="Đăng nhập">
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
</main>
</body>
</html>