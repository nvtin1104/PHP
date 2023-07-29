<?php
$shop = array(
    array('masp' => 's1', 'tenSp' => 'Iphone 17pro mac', 'gia' => '140000000', 'soluong' => '2'),
    array('masp' => 's2', 'tenSp' => 'Iphone 5 mac', 'gia' => '1400030000', 'soluong' => '2'),
    array('masp' => 's3', 'tenSp' => 'Iphone 3 mac', 'gia' => '1400040000', 'soluong' => '6'),
    array('masp' => 's4', 'tenSp' => 'Iphone 4 mac', 'gia' => '1400300000', 'soluong' => '2')
);
$newSp = array('masp' => 's1', 'tenSp' => 'asdasd 4 mac', 'gia' => '1400300000', 'soluong' => '2');
function checkData($data = 0)
{
    global $shop;
    foreach ($shop as $value) {
        if ($value['masp'] == $data) {
            return true;
        } else return false;
    }
}
if (isset($_POST['check-sp'])) {
    $data = $_POST['masp'];

    if (checkData($data)) {
        echo " San pham ton tai";
    } else {
        echo " San pham khong ton tai";
    }
}
function add($newSp)
{
    global $shop;
    array_push($shop, $newSp);
}


if (isset($_POST['add-sp'])) {
    $masp = $_POST['masp'];
    $tenSP = $_POST['tenSP'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $newSp = array('masp' => $masp, 'tenSP' => $tenSP, 'gia' => $gia, 'soluong' => $soluong);
    add($newSp, $shop);
    print($shop);
}
function delete($masp)
{
    global $shop;
    global $newSp;

    foreach ($shop as $key => $value) {
        if ($value['masp'] == $masp) {
            // unset($shop[$key]);
            $shop[$key] = $newSp;
            print_r($shop);
            break;
        }
    }
}
if (isset($_POST['delete-sp'])) {
    $masp = $_POST['masp'];
    delete($masp);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEllo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>

</body>

</html>