<?php
    session_start();
    if(!isset($_SESSION['acc'])){
        header("Location: index.php");
    }
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
    <title>Admin</title>
</head>
<body>
    <?php
        $read = @fopen('ti_gia.txt', "r");
        $info = fgets($read);
        $ti_gia = explode(",", $info);
    ?>
    <ul class="list-group">
        <li class="list-group-item">Tỷ Giá mua: <?= $ti_gia[0] ?></li>
        <li class="list-group-item">Tỷ Giá bán: <?= $ti_gia[1] ?></li>
    </ul>
    <form action="ti-gia.php" method="post">
        <div class="row m-5 p-5">
            <div class="col">
                <input type="number" name="ti_gia_mua" class="form-control" placeholder="Tỉ giá mua" aria-label="First name">
            </div>
            <div class="col">
                <input type="number" name="ti_gia_ban" class="form-control" placeholder="Tỉ giá bán" aria-label="Last name">
            </div>

            <div class="col">
                <input type="submit" class="form-control btn btn-success" value="Cập nhật giá" name="update">
            </div>
        </div>
        
    </form>
    <div class="row">
        <div class="col-md-12 text-right d-flex justify-content-end">
            <a class="btn btn-danger me-5" href="?logout=1">Đăng xuất</a>
        </div>
    </div>
    <br>
    <?php
        if(isset($_POST['update'])){
            $ti_gia_mua = $_POST['ti_gia_mua'];
            $ti_gia_ban = $_POST['ti_gia_ban'];
            if($ti_gia_mua != "" || $ti_gia_ban != ""){
                $file = @fopen("ti_gia.txt", "w");
                $data = "$ti_gia_mua,$ti_gia_ban";
                fwrite($file, $data);
                fclose($file);
                header("Refresh:0");
            }else if($_POST['ti_gia_mua'] == "" || $_POST['ti_gia_ban'] == ""){
                echo "Vui lòng nhập đầy đủ!";
            }else{
                echo "Vui lòng nhập đầy đủ!";
            };
        };
    ?>
    <br><br>
    <?php
        if(isset($_GET['logout'])){
            unset($_SESSION['acc']);
            header("Location: index.php");
        }
    ?>
</body>
</html>