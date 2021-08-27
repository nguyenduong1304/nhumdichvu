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
    <title>Admin</title>
</head>
<body>
    <?php
        $read = @fopen('ti_gia.txt', "r");
        $info = fgets($read);
        $ti_gia = explode(",", $info);
    ?>
    <ul>
        <li>Tỷ Giá mua: <?= $ti_gia[0] ?></li>
        <li>Tỷ Giá bán: <?= $ti_gia[1] ?></li>
    </ul>
    <form action="ti-gia.php" method="post">
        <label for="">Tỉ giá mua</label>
        <input type="number" name="ti_gia_mua" id="" >
        <br>
        <label for="">Tỉ giá bán</label>
        <input type="number" name="ti_gia_ban" id="">
        <br>
        <input type="submit" value="Cập nhật giá" name="update">
    </form>
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
    <a href="?logout=1">Đăng xuất</a>
    <?php
        if(isset($_GET['logout'])){
            unset($_SESSION['acc']);
            header("Location: index.php");
        }
    ?>
</body>
</html>