<?php
// Tạo mảng từ 0 đến 100 và xáo trộn các giá trị
$array = range(0, 100);
shuffle($array);

// In ra các giá trị chẵn
echo "Các giá trị chẵn: ";
foreach ($array as $value) {
    if ($value % 2 !== 1) {
          echo '<span style="color:green;">' . $value . '</span>' ." ,";    
    }
}
echo "<br>";

// In ra các giá trị lẻ
echo "Các giá trị lẻ: ";
foreach ($array as $value) {
    if ($value % 2 !== 0) {
          echo '<span style="color:red;">' . $value . '</span>' ." ,";
    }
}
echo "<br>";

// In ra các giá trị chia hết cho 3 và 5
echo "Các giá trị chia hết cho 3 và 5: ";
foreach ($array as $value) {
    if ($value % 3 === 0 && $value % 5 === 0) {
          echo '<span style="color:yellow;">' . $value . '</span>' ." ,";
    }
}
echo "<br>";

// In ra các giá trị là số chính phương
echo "Các số chính phương: ";
foreach ($array as $value) {
    if (sqrt($value) === floor(sqrt($value))) {
          echo '<span style="color:black;">' . $value . '</span>' ." ,";
    }
}
echo "<br>";

// In ra các giá trị là số nguyên tố
function isPrime($number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

echo "Các số nguyên tố: ";
foreach ($array as $value) {
    if (isPrime($value)) {
          echo '<span style="color:blue;">' . $value . '</span>' ." ,";
    }
}
echo "<br>";

// In ra số hoàn thiện
function isPerfect($number)
{
    if ($number < 2) {
        return false;
    }

    $sum = 1;
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
            if ($i * $i !== $number) {
                $sum += $number / $i;
            }
        }
    }

    return $sum === $number;
}

echo "Các số hoàn thiện: ";
foreach ($array as $value) {
    if (isPerfect($value)) {
          echo '<span style="color:orange   ;">' . $value . '</span>' ." ,";
    }
}
echo "<br>";

// Tính tổng của các số chính phương
$sumOfPerfectSquares = 0;
foreach ($array as $value) {
    if (sqrt($value) === floor(sqrt($value))) {
        $sumOfPerfectSquares += $value;
    }
}

echo "Tổng của các số chính phương là: " . $sumOfPerfectSquares;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4 - Bai 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    
</body>

</html>