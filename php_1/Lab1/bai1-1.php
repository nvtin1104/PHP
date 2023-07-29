<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Bài 1: 
    echo  "<h1>Hello word</h1>";
    echo ("Hello word <br>");
    echo "Hello World <br>";
    echo "Hello", "World", "<br>" ;
    // Bài 2
    $str = "hello string";
    $x = 200;
    $y = 44.6;
    echo "string is: $str <br>";
    echo "integer is: $x <br>";
    echo "float is: $y <br>";
    // Bài 3
    $color = "red";
    echo " My car is " . $color . "<br>";
    echo " My car is " . $COLOR . "<br>";
    echo " My car is " . $coLOR . "<br>";
    // Bài trên lớp

    $maSoSV = "PK03092";
    $ten = "Nguyen Van Tin";
    $tuoi = 19;
    $coNY = false;
    echo "<h2>Ho va ten: $ten</h2><br/>";
    echo "<h2>Ma so sinh vien: $maSoSV</h2><br/>";
    echo "<h2>Tuoi: $tuoi</h2><br/>";
    $x = 4 / 6;
    $y = 4 + 6;
    echo $x;
    echo "<br/>";
    echo $y;
    echo "<br/>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $canh_a = $_POST['canh_a'];
        $canh_b = $_POST['canh_b'];
        $canh_c = $_POST['canh_c'];

        // Xử lý các giá trị

        // In kết quả
        $perimeter = ($canh_a + $canh_b + $canh_c);
        // Tính nửa chu vi tam giác
        $half_perimeter = $perimeter / 2;
        // Tính diện tích tam giác bằng công thức Heron
        $area = sqrt($half_perimeter * ($half_perimeter - $canh_a) * ($half_perimeter - $canh_b) * ($half_perimeter - $canh_c));

        // In kết quả
        echo "Chu vi tam giác là: " . $perimeter, "<br>";

        echo "Diện tích tam giác là: " . $area;
    }

    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="canh_a">Cạnh a:</label>
        <input type="text" id="canh_a" name="canh_a"><br>
        <label for="canh_b">Cạnh b:</label>
        <input type="text" id="canh_b" name="canh_b"><br>
        <label for="canh_c">Cạnh c:</label>
        <input type="text" id="canh_c" name="canh_c"><br>
        <input type="submit" value="Submit">
    </form>
</body>
<script>
    let 
</script>
</html>