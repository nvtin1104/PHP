<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="tuoi"> Tuoi:</label>
        <input type="text" id="tuoi" name="tuoi"><br>
        <input type="submit" name="form1_submit" value="Submit Tuoi">
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
            $tuoi = $_POST['tuoi'];
            if (is_numeric($tuoi)) {
                if ($tuoi < 30) {
                    echo "Tuổi của bạn nhỏ hơn 30";
                } elseif ($tuoi > 30 && $tuoi < 40) {
                    echo "Tuổi của bạn có thể là 30-40";
                } elseif ($tuoi > 40 && $tuoi < 50) {
                    echo "Tuổi của bạn có thể là 40-50";
                } else {
                    echo "Tuổi của bạn lớn hơn 50";
                }
            }
        }
    }
    // Bài 2
    echo "<br>";
    $max = 0;
    echo $i = 0;
    echo ", ";
    echo $j = 1;
    echo ", ";
    $result = 0;
    while ($max < 10) {
        $result = $i + $j;
        $i = $j;
        $j = $result;
        $max = $max + 1;
        echo $result;
        echo ", ";
    }
    // Bài 3
    $fruits = array('apple', 'orange', 'banana', 'grape');
    foreach ($fruits as $fruit) {
        echo $fruit;
        echo "<br />";
    }
    $employee = array('name' => 'john Smith', 'age' => 20, 'profession' => 'Teacher');
    foreach ($employee as $key => $value) {
        echo sprintf(" %s: %s<br />", $key, $value);
        echo "</br />";
    }
    // Bài 4
    echo 'Simple Break' . "<br />";
    for ($i = 1; $i <= 2; $i++) {
        echo "\n" . '$i = ' . $i . ' ';
        for ($j = 1; $j <= 5; $j++) {
            if ($j == 2) {
                break;
            }
            echo '$j =' . $j . '';
            echo "<br />";
        }
    }

    echo 'Multi-level Break' . "<br />";
    for ($i = 1; $i <= 2; $i++) {
        echo "\n" . '$i = ' . $i . ' ';
        for ($j = 1; $j <= 5; $j++) {
            if ($j == 2) {
                break 2;
            }
            echo '$j =' . $j . ' ';
            echo "<br />";
        }
    }

    ?>



</body>

</html>