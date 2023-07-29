<?
// xây dựng vòng lặp
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
    <!-- Vòng lặp -->
    <?php
    for ($i = 0; $i < 101; $i++) {
        $squareRoot = sqrt($i);  // $squareRoot = 4

        if ($squareRoot == (int)$squareRoot) {
            echo $i.",";
        }
    }
    ?>
</body>

</html>