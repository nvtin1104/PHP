<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numberA"> a:</label>
        <input type="text" id="numberA" name="numberA"><br>
        <label for="numberB"> b:</label>
        <input type="text" id="numberB" name="numberB"><br>
        <label for="toanTu"> Toan tu:</label>
        <input type="text" id="toanTu" name="toanTu"><br>
        <input type="submit" name="form1_submit" value="Submit Toan Tu">
    </form>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="string"> String:</label>
        <input type="text" id="string" name="string"><br>
        <input type="submit" name="form2_submit" value="Submit In String">
    </form>
    <?php
    // Xử lý Bài 1
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['form1_submit'])) {
            $numberA = $_POST['numberA'];
            $numberB = $_POST['numberB'];
            $toanTu = $_POST['toanTu'];

            // Xử lý các giá trị
            switch ($toanTu) {
                case '+':
                    $ketQua = $numberA + $numberB;
                    break;
                case '-':
                    $ketQua = $numberA - $numberB;
                    break;
                case '*':
                    $ketQua = $numberA * $numberB;
                    break;
                case '/':
                    $ketQua = $numberA / $numberB;
                    break;
                case '==':
                    $ketQua = $numberA == $numberB;
                    break;
                case '!=':
                    $ketQua = $numberA != $numberB;
                    break;
                case '<>':
                    $ketQua = $numberA <> $numberB;
                    break;
                case '===':
                    $ketQua = $numberA === $numberB;
                    break;
                case '>=':
                    $ketQua = $numberA >= $numberB;
                    break;
                case '<=':
                    $ketQua = $numberA <= $numberB;
                    break;
                case '>':
                    $ketQua = $numberA > $numberB;
                    break;
                case '<':
                    $ketQua = $numberA < $numberB;
                    break;
                default:
                    $ketQua = "Toán tử không hợp lệ";
            }
            // In kết quả
            echo "Kết quả của Form 1 là: " . var_export($ketQua, true);
        }
    }

    // Xử lý Bài 2
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['form2_submit'])) {
            $stringTest = $_POST['string'];
            // In kết quả
            echo "Kết quả của In String là: " . $stringTest;
        }
    }
    // Bài 2.b
    echo "<br>";
    $s = "hello\rMarlo";
    echo $s, "<br>";
    $s = 'It\'s\n';
    echo $s, "<br>";
    echo "\nHello<br>world", "<br>";
    echo "\u{00C2A9}", "<br>";
    echo "\u{C2A9}", "<br>";

    $a = 'hello';
    $$a = 'world';
    echo "$a {$$a} <br>";
    ?>

 

</body>

</html>