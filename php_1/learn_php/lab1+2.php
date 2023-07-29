<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Tính diện tích hình tròn -->
    <h3>Tính diện tích hình tròn:</h3>
    <?
    if (isset($_POST['submit-htron'])) {
        $banKinh = $_POST['banKinh'];
        if (is_numeric($banKinh)) {
            $dienTich = pi() * pow($banKinh, 2);
            echo "Diện tích hình tròn là: " . $dienTich . " m&sup2";
        } else echo "Vui lòng nhập số hợp lệ!";
    }
    ?>
    <form action="" method="post">
        <label for="banKinh">Ban kinh:</label>
        <input type="text" name="banKinh" id="banKinh" required>
        <input type="submit" value="Tính S Hình tròn" name="submit-htron">
    </form>
    <br />
    <h3>Tính năm nhuận:</h3>
    <?
    // tính năm nhuận
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
    ?>
    <form action="" method="post">
        <label for="number2">Nhập năm:</label>
        <input type="text" name="year" id="number2">
        <input type="submit" value="Submit" name="submit-btn2">
    </form>
    <br />
    <!-- Kiểm tra 1 số có hia hết cho 3 và 5 -->
    <?php
    if (isset($_POST['submit-check35'])) {
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
    ?>
    <h3>Kiểm tra chia hết:</h3>
    <form action="" method="post">
        <label for="number">Nhập giá trị</label>
        <input type="text" name="number" id="number">
        <input type="submit" value="Submit" name="submit-check35">
    </form>
    <br />
    <h3>Kiểm tra tam giác:</h3>
    <!-- Kiểm nhập vào 3 cạnh a,b,c kiểm tra tam giác là gì
 -->
    <?php
    if (isset($_POST['submit-checkTamGiac'])) {
        $canhA = $_POST['canhA'];
        $canhB = $_POST['canhB'];
        $canhC = $_POST['canhC'];
        if (is_numeric($canhA) && is_numeric($canhB) && is_numeric($canhC)) {
            if ($canhA + $canhB <= $canhC || $canhA + $canhC <= $canhB || $canhB + $canhC <= $canhA) {
                echo "Tam giác không tồn tại.";
            } else {
                if ($canhA * $canhA + $canhB * $canhB == $canhC * $canhC || $canhA * $canhA + $canhC * $canhC == $canhB * $canhB || $canhB * $canhB + $canhC * $canhC == $canhA * $canhA) {
                    echo "Tam giác vuông.";
                } elseif ($canhA == $canhB || $canhA == $canhC || $canhB == $canhC) {
                    if ($canhA == $canhB && $canhA == $canhC) {
                        echo "Tam giác đều.";
                    } else
                        echo "Tam giác cân.";
                } elseif ($canhA != $canhB && $canhA != $canhC && $canhB != $canhC) {
                    echo "Tam giác thường.";
                }
            }
        } else echo "Vui lòng nhập số hợp lệ!";
    }
    // Tính diện tích tam giác
    if (isset($_POST['submit-tinhS'])) {
        $canhA = $_POST['canhA'];
        $canhB = $_POST['canhB'];
        $canhC = $_POST['canhC'];
        if (is_numeric($canhA) && is_numeric($canhB) && is_numeric($canhC)) {
            $nuaChuVi = ($canhA + $canhB + $canhC) / 2;
            $sTamGiac = sqrt($nuaChuVi * ($nuaChuVi - $canhA) * ($nuaChuVi - $canhB) * ($nuaChuVi - $canhC));
            echo "Diện tích tam giác đã cho là: " . $sTamGiac . " m&sup2";
        } else echo "Vui lòng nhập số hợp lệ!";
    }
    ?>
    <form action="" method="post">
        <label for="canhA">Canh A:</label>
        <input type="text" name="canhA" id="canhA" required>
        <br>
        <label for="canhB">Canh B:</label>
        <input type="text" name="canhB" id="canhB" required>
        <br>
        <label for="canhC">Canh C:</label>
        <input type="text" name="canhC" id="canhC" required>
        <br>
        <br>
        <input type="submit" value="Submit kiểm tra Tam giác" name="submit-checkTamGiac">
        <input type="submit" value="Submit tinh S" name="submit-tinhS">
    </form>
    <br />
    <h3>Kiểm tra học lực:</h3>
    <?php
    if (isset($_POST['submit-hocLuc'])) {
        $diem = $_POST['diem'];
        if (is_numeric($diem) && $diem <= 10 && $diem >= 0) {
            if ($diem < 5) {
                echo "Yếu";
            } elseif ($diem <= 6.5) {
                echo "Trung bình";
            } elseif ($diem < 8.0) {
                echo "Khá";
            } elseif ($diem < 9.0) {
                echo "Giỏi";
            } else {
                echo "Xuất sắc";
            }
        } else {
            echo "Vui lòng nhập điểm hợp lệ!";
        }
    }

    ?>
    <form action="" method="post">
        <label for="diem">Nhập điểm:</label>
        <input type="text" name="diem" id="diem" required>
        <input type="submit" value="Submit kiểm tra học lực" name="submit-hocLuc">
    </form>
    <br />
    <h3>Kiểm tra số chẵn:</h3>
    <?
    if (isset($_POST['submit-checkNumber'])) {
        $numberCheck = $_POST['number-check'];
        if (is_numeric($numberCheck)) {
            if ($numberCheck % 2 == 0) {
                echo "Số nhập vào là số chẵn!";
            } else {
                echo "Số nhập vào là số lẻ!";
            }
        } else {
            echo "Vui lòng nhập điểm hợp lệ!";
        }
    }
    ?>
    <form action="" method="post">
        <label for="number-check">Nhập số:</label>
        <input type="text" name="number-check" id="number-check" required>
        <input type="submit" value="Submit kiểm tra học lực" name="submit-checkNumber">
    </form>
    <br>
    <h3>Giải phương trình:</h3>
    <?
    if (isset($_POST['submit-ptb1']) || isset($_POST['submit-ptb2'])) {
        $numberA = $_POST['numberA'];
        $numberB = $_POST['numberB'];
        $numberC = $_POST['numberC'];
        if (is_numeric($numberA) && is_numeric($numberB) && is_numeric($numberC)) {
            if (isset($_POST['submit-ptb1'])) {
                if ($numberA != 0) {
                    $x = ($numberC - $numberB) / $numberA;
                    echo "Nghiệm của phương trình là: x = " . $x;
                } elseif ($numberB == $numberC) {
                    echo "Phương trình vô số nghiệm.";
                } else {
                    echo "Phương trình vô nghiệm.";
                }
            } elseif (isset($_POST['submit-ptb2'])) {
                if ($numberA != 0) {
                    $delta = $numberB * $numberB - 4 * $numberA * $numberC;

                    // Kiểm tra giá trị của delta để xác định nghiệm của phương trình
                    if ($delta > 0) {
                        $x1 = (-$numberB + sqrt($delta)) / (2 * $numberA);
                        $x2 = (-$numberB - sqrt($delta)) / (2 * $numberA);
                        echo "Nghiệm của phương trình là: x1 = " . $x1 . ", x2 = " . $x2;
                    } elseif ($delta == 0) {
                        $x = -$numberB / (2 * $numberA);
                        echo "Phương trình có nghiệm kép: x = " . $x;
                    } else {
                        echo "Phương trình vô nghiệm.";
                    }
                } else {
                    echo "Đây không phải là phương trình bậc hai.";
                }
            }
        } else echo "Vui lòng nhập số hợp lệ! ";
    }

    ?>
    <form action="" method="post">
        <label for="numberA">NumberA:</label>
        <input type="text" name="numberA" id="numberA" required>
        <label for="numberB">NumberB:</label>
        <input type="text" name="numberB" id="numberB" required>
        <label for="numberC">NumberC:</label>
        <input type="text" name="numberC" id="numberC" required>
        <br>
        <input type="submit" value="Giải pt bậc 1" name="submit-ptb1">
        <input type="submit" value="Giải pt bậc 2" name="submit-ptb2">
    </form>
    <h3>Kiểm tra chỉ số BMI</h3>
    <!-- Bài Kiểm tra chỉ số bmi -->
    <?php
    if (isset($_POST['submit-btn5'])) {
        $chieuCao = $_POST['chieuCao'];
        $canNang = $_POST['canNang'];
        if (is_numeric($canNang) && is_numeric($chieuCao)) {
            $bmi = ($canNang / ($chieuCao * $chieuCao));
            if ($bmi < 18.5) {
                echo "Duới chuẩn " . "<br />";

                echo '<img src="../img_lab/duoichuan.png">';
                echo "<br />";
                echo "<h1>Lời khuyên:</h1>" . "<br />";
                echo "<p>Nếu bạn đang gặp vấn đề thiếu cân, dưới đây là một số lời khuyên để giúp bạn tăng cân một cách lành mạnh:<br />

                Tăng lượng calo tiêu thụ: Hãy đảm bảo bạn tiêu thụ nhiều calo hơn so với lượng calo bạn tiêu thụ hàng ngày. Tăng calo có thể được đạt được bằng cách tăng khẩu phần ăn hàng ngày hoặc bổ sung thêm bữa ăn phụ giữa các bữa chính.<br>
                
                Tăng lượng chất béo và protein: Chất béo và protein là hai thành phần quan trọng để tăng cân và xây dựng cơ bắp. Hãy đảm bảo bạn có đủ nguồn cung cấp chất béo và protein từ thực phẩm như cá, thịt, đậu, hạt, sữa và sản phẩm từ sữa.<br>
                
                Tăng khẩu phần ăn: Hãy tăng khẩu phần ăn của bạn trong mỗi bữa. Thử ăn thêm một chút so với khẩu phần bình thường và tăng dần lên theo thời gian.<br>
                
                Tập thể dục và tăng cường cơ bắp: Tập luyện sẽ giúp tăng cường cơ bắp và đốt cháy calo. Tập thể dục kéo dài và tập trọng lượng có thể giúp bạn tăng cân bằng cách tạo ra cơ bắp mới.<br>
                
                Ăn thêm bữa phụ: Bổ sung bữa ăn phụ như các loại snack lành mạnh giữa các bữa chính để tăng lượng calo hàng ngày.<br>
                
                Tránh thức ăn không có giá trị dinh dưỡng: Hạn chế tiêu thụ thức ăn có nhiều chất bột, đường và chất béo không lành mạnh như đồ chiên, đồ ngọt, và thức ăn nhanh.<br>
                
                Kiểm tra sức khỏe: Nếu bạn gặp vấn đề về thiếu cân nghiêm trọng, hãy tham khảo ý kiến ​​bác sĩ hoặc chuyên gia dinh dưỡng để được tư vấn và kiểm tra sức khỏe.<br>
                
                Nhớ là tăng cân một cách lành mạnh và dừng lại khi bạn đạt được trọng lượng mong muốn. Hãy luôn theo dõi sự phát triển và sức khỏe của bạn trong quá trình tăng cân.</p><br>";
            } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                echo "Trung bình ";
                echo '<img src="../img_lab/trungbinh.png">';
                echo "p\<p>Đừng để bị béo!</p>";
            } elseif ($bmi >= 25 && $bmi <= 29.9) {
                echo "Thừa cân ";
                echo '<img src="../img_lab/thuacan.png">' . "<br>";
                echo "<h1>Lời khuyên:</h1>" . "<br />";
                echo "Nếu bạn đang gặp vấn đề thừa cân, dưới đây là một số lời khuyên để giúp bạn giảm cân một cách lành mạnh:

                Tạo một lịch trình ăn uống cân đối: Tập trung vào việc ăn các loại thực phẩm giàu chất xơ, vitamin và khoáng chất như rau xanh, trái cây, ngũ cốc nguyên hạt và các nguồn protein thực vật hoặc động vật không béo.
                
                Hạn chế tiêu thụ calo dư thừa: Điều chỉnh khẩu phần ăn của bạn để tiêu thụ ít calo hơn so với nhu cầu hàng ngày của bạn. Tránh các loại thức ăn chứa nhiều chất béo, đường và calo không cần thiết.
                
                Tăng cường hoạt động thể chất: Lập kế hoạch và thực hiện các hoạt động thể chất đều đặn như đi bộ, chạy bộ, bơi lội, tham gia lớp tập thể dục hoặc các bài tập cardio khác để đốt cháy calo và giảm cân.
                
                Theo dõi khẩu phần ăn và hoạt động: Ghi lại nhật ký ăn uống và hoạt động hàng ngày để theo dõi tiến trình và nhận ra các vấn đề tiềm ẩn hoặc cải thiện khả năng theo kế hoạch.
                
                Tạo mục tiêu giảm cân và theo dõi tiến trình: Đặt mục tiêu giảm cân cụ thể và theo dõi tiến trình để cảm thấy động lực và đạt được thành công.
                
                Tránh ăn nhanh và ăn kiểu 'nhìn thấy ăn liền': Ăn chậm và tận hưởng mỗi miếng thức ăn. Điều này sẽ giúp bạn cảm nhận rõ khi no hơn và tránh ăn quá nhiều.
                
                Hãy tìm kiếm sự hỗ trợ: Hãy tham gia các nhóm giảm cân, tìm người bạn cùng nhóm luyện tập hoặc tìm kiếm sự hỗ trợ từ gia đình, bạn bè hoặc chuyên gia dinh dưỡng.";
            } else {
                echo "Béo phì";
                echo '<img src="../img_lab/beophi.png">';
            }
        } else {
            echo 'Vui lòng nhập một số hợp lệ.';
        }
    }
    ?>
    <form action="" method="post">
        <label for="chieuCao">Nhập chiều cao:(m)</label> <br>
        <input type="text" name="chieuCao" id="chieuCao">
        <br>
        <label for="canNang">Nhập cân nặng:(kg)</label> <br>
        <input type="text" name="canNang" id="canNang">
        <br>
        <br>
        <input type="submit" value="Submit" name="submit-btn5">
    </form>
    <!-- Color -->
    <br>
    <h3>Kiểm tra color:</h3>
    <?php
    if (isset($_POST['submit-color'])) {
        $color = trim($_POST['color']);
        $colorLower = mb_strtolower($color);
        switch ($colorLower) {
            case 'trắng':
                echo '<div style="border:1px solid #000;height: 20px; width:20px; background:#fff"></div>';
                break;
            case 'đen':
                echo '<div style="border:1px solid #000;height: 20px; width:20px; background:#000"></div>';
                break;
            case 'bạc':
                echo '<div style="border:1px solid #000;height: 20px; width:20px; background:gray"></div>';
                break;
            case 'đỏ':
                echo '<div style="border:1px solid #000;height: 20px; width:20px; background:red"></div>';
                break;
            case 'vàng':
                echo '<div style="border:1px solid #000;height: 20px; width:20px; background:yellow"></div>';
                break;
            case 'xanh':
                echo '<div style="border:1px solid #000;height: 20px; width:20px; background:blue"></div>';
                break;
            case 'cam':
                echo '<div style="border:1px solid #000;height: 20px; width:20px; background:orange"></div>';
                break;
            default:
                echo 'Vui lòng nhập màu hợp lệ!';
                break;
        }
    }
    ?>
    <form action="" method="post">
        <label for="color">
            <input type="text" name="color" id="color">
            <input type="submit" value="Submit color" name="submit-color">
        </label>
    </form>
    <br>
    <!-- Kiểm tra số dương, số âm hoặc số không -->
    <?php
    if (isset($_POST['submit-check-lunisolar'])) {
        $numberCheck = $_POST['number-check-lunisolar'];
        if (is_numeric($numberCheck)) {
            if ($numberCheck > 0) {
                echo 'Số dương';
            } elseif ($numberCheck < 0) {
                echo 'Số âm';
            } else echo "Là số 0  ";
        } else {
            echo 'Vui lòng nhập một số hợp lệ!';
        }
    }
    ?>
    <h3>Kiểm tra số âm dương:</h3>
    <br>
    <form action="" method="post">
        <label for="number-check-lunisolar">Nhập vào 1 số:</label>
        <input type="text" name="number-check-lunisolar" id="number-check-lunisolar">
        <input type="submit" name="submit-check-lunisolar">
    </form>
    <!-- Vòng lặp -->
    <h3>Vòng lặp:</h3><br>
    <?php
    $evenNumber = array();
    $odd = array();
    $oddDivisible5 = array();

    for ($i = 0; $i < 101; $i++) {
        if ($i % 2 == 0) {
            $evenNumber[] = $i;
        } else {
            $odd[] = $i;
            if ($i % 5 == 0) {
                $oddDivisible5[] = $i;
            }
        }
    }

    foreach ($odd as $itemOdd) {
        echo $itemOdd . ",";
    }
    echo "<br/>";

    foreach ($evenNumber as $itemEven) {
        echo $itemEven . ",";
    }
    echo "<br/>";

    foreach ($oddDivisible5 as $item) {
        echo $item . ",";
    }
    echo "<br/>";
    for ($i = 0; $i <= 100; $i++) {
        if (sqrt($i) == floor(sqrt($i))) {
            echo $i . ", ";
        }
    }
    echo "<br/>";
    function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }
    for ($i = 0; $i <= 100; $i++) {
        if (isPrime($i)) {
            echo $i . ", ";
        }
    }
    echo "<br/>";
    $sum = 0;
    $count = 0;
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 2 == 0 && $i % 4 == 0) {
            $sum += $i;
            $count++;
        }
    }
    $avg = $sum / $count;

    echo "tbc Tổng các số chia hết cho cả 2 và 4 là: " . $avg;
    echo "Tổng các số chia hết cho cả 2 và 4 là: " . $sum;
    echo "<br/>";
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo $i . " x " . $j . " = " . $result . "<br/>";
        }
        echo "<br/>";
    }

    ?>
</body>

</html>