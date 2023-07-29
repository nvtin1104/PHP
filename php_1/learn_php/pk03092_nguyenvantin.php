<?php

use function PHPSTORM_META\elementType;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <?
    if (isset($_POST['nhap-luong'])) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $luong = $_POST['luong'];
        $thue;
        if (is_numeric($luong)) {
            if ($luong > 20000000) {
                $thue = ($luong * 25) / 100;
                echo "Thue của " . $name . "la" . $thue;
                echo " Luong của nhan vien là: " . $luong - $thue;
            } elseif ($luong > 10000000) {
                $thue = ($luong * 15) / 100;
                echo "Thue của " . $name . "la" . $thue;
                echo " Luong của nhan vien là: " . $luong - $thue;
            } else echo "Không cần tính thuế thu nhập";
        } else {
            echo "Vui lonfng nhập số hợp lệ!";
        }
    }
    ?>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="role">Role:</label>
        <input type="text" name="role" id="role">
        <label for="luong">Luong:</label>
        <input type="text" name="luong" id="luong">
        <input type="submit" value="Nhập lương" name="nhap-luong">
    </form>
    <?
    $tbc = 0;
    $sum = 0;
    $count;
    for ($i = 0; $i < 151; $i++) {
        $sum = $sum + $i;
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "$i" . ",";
        }
    }
    $tbc = $sum / 150;
    echo "Trung binh cong là:" . $tbc;

    ?>
    <?
    $users = array(
        array('username' => 'admin', 'password' => '123456', 'role' => 'admin'),
        array('username' => 'admin1', 'password' => '123456', 'role' => 'admin'),
        array('username' => 'admin2', 'password' => '123456', 'role' => 'user'),
        array('username' => 'admin4', 'password' => '123456', 'role' => 'user'),
    );
    echo "<br/>";
    echo "User:";
    foreach ($users as $user) {
        if ($user['role'] == 'user') {
            echo $user['username'] . "\n";
            echo "<br/>";
        }
    }
    echo "<br/>";
    echo "Admin:";
    foreach ($users as $user) {
        if ($user['role'] == 'admin') {
            echo $user['username'] . "\n";
            echo "<br/>";
        }
    }
    if (isset($_POST['login'])) {
        $name = $_POST['name'];
        $pass = $_POST['role'];
        foreach ($users as $user) {
            if ($user['username'] == $name && $user['password'] == $pass) {
                $check = 1;
            }
            
        }
        if ($check ==1){
            echo "Đăng nhập thành công; ";
        }
        else echo "Đăng nhâp thất bại";
    }
    ?>
     <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="role">password:</label>
        <input type="text" name="role" id="role">
        <input type="submit" value="login" name="login">
    </form>

</body>

</html>