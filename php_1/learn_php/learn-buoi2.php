<?

if (isset($_POST['submit-btn'])) {
    $number = $_POST['number'];
    if (is_numeric($number)) {
        if ($number % 3 == 0 && $number % 5 == 0) {
            echo $number . ' chia hết cho 3 và 5';
        } else {
            echo $number . ' không chia hết cho 3 và 5';
        }
    } else {
        echo 'Vui lòng nhập một số hợp lệ.';
    }
}
if (isset($_POST['submit-btn2'])) {
    $year = $_POST['year'];
    if (is_numeric($year)) {
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            echo $year . " là năm nhuận";
        } else {
            echo $year . " là năm không nhuận";
        }
    }
}
if (isset($_POST['submit-btn3'])) {
    $canhA = $_POST['canhA'];
    $canhB = $_POST['canhB'];
    $canhC = $_POST['canhC'];
    if ($canhA + $canhB > $canhC && $canhA + $canhC > $canhB && $canhB + $canhC > $canhA) {
        echo 'Thông báo: Đó là 1 tam giác';
    } else {
        echo 'Thông báo: Đó 0 là  tam giác';
    }
}
if (isset($_POST['submit-btn4'])) {
    $namSinh = $_POST['namSinh'];
    $namHienTai = date('Y');
    if ($namSinh > $namHienTai) {
        echo 'Thông báo: Gà';
    } else {
        if ($namHienTai - $namSinh > 17) {
            if ($namHienTai - $namSinh > 80) {
                echo 'Thông báo: Bạn quá tuổi';
            } else
                echo 'Thông báo: Bạn đủ tuổi';
        } else {
            echo 'Thông báo: Bạn 0 đủ tuổi';
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="number">Nhập giá trị</label> <br>
        <input type="text" name="number" id="number">
        <br>
        <br>
        <input type="submit" value="Submit" name="submit-btn">
    </form>
    <form action="" method="post">
        <label for="number2">Nhập giá trị</label> <br>
        <input type="text" name="year" id="number2">
        <br>
        <br>
        <input type="submit" value="Submit" name="submit-btn2">
    </form>
    <form action="" method="post">
        <label for="canhA">Canh a</label> <br>
        <input type="number" name="canhA" id="canhA">
        <br>
        <label for="canhB">Canh a</label> <br>
        <input type="number" name="canhB" id="canhB">
        <br>
        <label for="canhC">Canh a</label> <br>
        <input type="number" name="canhC" id="canhC">
        <br>
        <br>
        <input type="submit" value="Submit tinh tam giac" name="submit-btn3">
    </form>
    <form action="" method="post">
        <h1>Kiểm tra giấy phép lái xe
        </h1>
        <label for="namSinh">Nam sinh:</label> <br>
        <input type="number" name="namSinh" id="namSinh">
        <br>
        <br>
        <input type="submit" value="Submit bang lai xe:" name="submit-btn4">
    </form>
</body>

</html>