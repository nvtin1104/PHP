<?php
// Kết nối đến cơ sở dữ liệu (như đã mô tả ở bước 1)
include('connect.php');

// Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

// Xử lý dữ liệu gửi từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    // Xử lý tệp hình ảnh
    $target_dir = "../add-product/uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Kiểm tra kiểu tệp hình ảnh
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Chỉ chấp nhận các tệp JPG, JPEG, PNG.";
    } else {
        // Upload tệp hình ảnh vào thư mục "uploads"
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Lưu thông tin sản phẩm vào cơ sở dữ liệu
            $sql = "INSERT INTO products (product_name, price, description, image) VALUES ('$product_name', '$price', '$description', '$target_file')";
            if (mysqli_query($conn, $sql)) {
                echo "Sản phẩm đã được tải lên thành công.";
            } else {
                echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Đã xảy ra lỗi khi tải lên hình ảnh.";
        }
    }
}

// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="text" name="product_name" placeholder="Tên sản phẩm">
        <input type="text" name="price" placeholder="Giá">
        <textarea name="description" placeholder="Mô tả"></textarea>
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>
    <?php
    // Kết nối đến cơ sở dữ liệu (như đã mô tả ở bước 1)
    // Kết nối đến cơ sở dữ liệu (như đã mô tả ở bước 1)
    include('connect.php');

    // Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
    // Truy vấn dữ liệu sản phẩm
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    // Hiển thị sản phẩm
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Tên sản phẩm: " . $row["product_name"] . "<br>";
            echo "Giá: " . $row["price"] . "<br>";
            echo "Mô tả: " . $row["description"] . "<br>";
            echo "<img src='" . $row["image"] . "'><br><br>";
        }
    } else {
        echo "Không có sản phẩm.";
    }

    // Đóng kết nối đến cơ sở dữ liệu
    mysqli_close($conn);
    ?>

</body>

</html>