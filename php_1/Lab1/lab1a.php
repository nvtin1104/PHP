<?

if (isset($_POST['submit-btn'])) {
    $point = $_POST['point'];
    if (is_numeric($point)) {
        if ($point >= 0 && $point <= 10) {
            if ($point < 5) {
                echo "Học sinh yếu.";
            } elseif ($point <= 6.5) {
                echo "Học sinh trung bình";
            } elseif ($point < 8) {
                echo "Học sinh Khá";
            } elseif ($point < 9) {
                echo "Học sinh giỏi";
            } else echo "Học sinh xuất sắc";
        } else {
            echo "Vui lòng nhập điểm hợp lệ.";
        }
    } else {
        echo 'Vui lòng nhập một số hợp lệ.';
    }
}
if (isset($_POST['submit-btn2'])) {
    $number = $_POST['number'];
    if (is_numeric($number)) {
        if ($number% 2 == 0) {
            echo $number . " là số chẵn";
        } else {
            echo $number . " là số lẻ";
        }
    }
    else echo "VUi lòng nhập số hợp lệ!";
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
        <label for="point">Nhập giá trị</label> <br>
        <input type="text" name="point" id="point">
        <br>
        <br>
        <input type="submit" value="Submit điểm" name="submit-btn">
    </form>
    <form action="" method="post">
        <label for="number">Nhập giá trị</label> <br>
        <input type="text" name="number" id="number">
        <br>
        <br>
        <input type="submit" value="Submit kiểm tra số chẵn" name="submit-btn2">
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
    <?php
    if (isset($_POST['submit-btn5'])) {
        $chieuCao = $_POST['chieuCao'];
        $canNang = $_POST['canNang'];
        if (is_numeric($canNang) && is_numeric($chieuCao)) {
           $bmi = $canNang/pow($chieuCao,2);
           if ($bmi < 18.5) {
            echo "Duới chuẩn ";
           
        } else {
            echo 'Vui lòng nhập một số hợp lệ.';
        }
    }}
    ?>
    <form action="" method="post">
        <img src="" alt="">
        <label for="chieuCao">Nhập giá trị</label> <br>
        <input type="text" name="chieuCao" id="chieuCao">
        <label for="canNang">Nhập giá trị</label> <br>
        <input type="text" name="canNang" id="canNang">
        <br>
        <br>
        <input type="submit" value="Submit" name="submit-btn5">
    </form>
</body>
</html>