<?php
$listSp = array(
    'sp001' => array("name" => "Quan jeans", "img" => "../img_lab/beophi.png", "cost" => 1000, "type" => "Quan ao"),
    'sp002' => array("name" => "Quan jeans", "img" => "../img_lab/duoichuan.png", "cost" => 1000, "type" => "Quan ao"),
    'sp003' => array("name" => "Quan jeans", "img" => "../img_lab/thuacan.png", "cost" => 1000, "type" => "Quan ao"),
    'sp004' => array("name" => "Quan jeans", "img" => "../img_lab/beophi.png", "cost" => 1000, "type" => "Quan ao")
);

if (isset($_POST['submit'])) {
    $msp = $_POST['msp'];
    $name = $_POST['tensp'];
    $img = $_POST['img'];
    $cost = $_POST['gia'];
    $type = $_POST['kieu'];

    $newSP = array("name" => $name, "img" => $img, "cost" => $cost, "type" => $type);
    $listSp[$msp] = $newSP;

    // In ra thông tin đã lưu
    echo "Thông tin sản phẩm đã lưu:<br>";
    echo "Msp: $msp<br>";
    echo "Tên sản phẩm: $name<br>";
    echo "Link ảnh: $img<br>";
    echo "Giá: $cost<br>";
    echo "Kiểu: $type<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <form action="" method="post">
        <label for="msp">Msp:</label>
        <input type="text" name="msp" id="msp">
        <label for="tensp">Ten sp:</label>
        <input type="text" name="tensp" id="tensp">
        <label for="img">Link anh:</label>
        <input type="text" name="img" id="img">
        <label for="gia">Gia:</label>
        <input type="number" name="gia" id="gia">
        <label for="kieu">Kieu:</label>
        <input type="text" name="kieu" id="kieu">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
