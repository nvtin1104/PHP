<?php
$host = 'localhost'; // Tên server, nếu dùng hosting free thì cần thay đổi
$dbname = 'php_1'; // Tên của Database
$username = 'root'; // Tên sử dụng Database
$password = '1104'; // Mật khẩu của tên sử dụng Database

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect($host, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}
?>
