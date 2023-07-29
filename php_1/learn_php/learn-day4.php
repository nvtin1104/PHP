<?
$mang = array('nguyen van a', 'nguyen van b ', 'nguyen van c');
foreach ($mang as $item) {
    echo $item . "<br>";
}
$arrayColor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($arrayColor as $item) {
    if ($item % 2 == 0) {
        echo "<span class='text-danger'> $item</span>";
    } else {
        echo "<span class='text-success'> $item</span>";
    }
}
// array("id" => "1", "name" => "Nguyen Van Tin", "description" => "no");
// echo $arrayLK["id"] . $arrayLK["name"] . $arrayLK["description"];
// echo "<br /> ";
// foreach ($arrayLK as $value) {
//     echo $value;
// }
$mangCha = array(
    'pk001' => array("name" => "Nguyen Van Tin", "description" => "no"),
    'pk002' => array("name" => "Nguyen Van Tin", "description" => "no"),
    'pk003' => array("name" => "Nguyen Van Tin", "description" => "no")
);
print_r($mangCha['pk003']);

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
}
foreach ($listSp as $key => $value) {
    echo "<h1>$key</h1>";
    echo "<img src='" . $value['img'] . "'></img>";
    echo $value['name'];
    echo $value['cost'];
    echo $value['type'];
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
    <?php
if (isset($_POST['submit'])) {
    $msp = $_POST['msp'];
    $name = $_POST['tensp'];
    $img = $_POST['img'];
    $cost = $_POST['gia'];
    $type = $_POST['kieu'];
    $newSP = array("name" => $name, "img" => $img, "cost" => $cost, "type" => $type);
    $listSp[$msp] = $newSP;
}
    ?>

    <form action="./t.php" method="post">
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