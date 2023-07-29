<?php

session_start();

// Kiểm tra nếu biến session sản phẩm chưa tồn tại, thì khởi tạo một mảng trống để lưu danh sách sản phẩm
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])) {
    // Lấy thông tin sản phẩm từ form
    $id = $_POST['id'];
    $ten = $_POST['ten'];
    $gia = $_POST['gia'];
    $danhmuc = $_POST['danhmuc'];
    $mota = $_POST['mota'];

    $targetDirectory = "./uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    // Di chuyển tệp tạm thời vào thư mục đích
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "Tải ảnh lên thành công.";
    } else {
        echo "Không thể di chuyển ảnh vào thư mục đích.";
    }

    // Tạo một mảng để lưu thông tin sản phẩm
    $product = array(
        'id' => $id,
        'ten' => $ten,
        'gia' => $gia,
        'hinhanh' => $targetFile,
        'danhmuc' => $danhmuc,
        'mota' => $mota
    );

    // Thêm sản phẩm vào danh sách
    array_push($_SESSION['products'], $product);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_product'])) {
    $index = $_POST['index']; // Lấy index của sản phẩm cần xóa
    if (isset($_SESSION['products'][$index])) {
        $filePath = $_SESSION['products'][$index]['hinhanh'];
        // Xóa tệp ảnh từ thư mục đích
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        unset($_SESSION['products'][$index]); // Xóa sản phẩm khỏi danh sách
        $_SESSION['products'] = array_values($_SESSION['products']); // Đánh lại chỉ số của mảng
    }
}
if (isset($_POST['update_product'])) {
    // Xử lý yêu cầu cập nhật thông tin sản phẩm
    $index = $_POST['index']; // Lấy index của sản phẩm cần cập nhật
    if (isset($_SESSION['products'][$index])) {
        // Lấy thông tin sản phẩm từ form
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $gia = $_POST['gia'];
        $danhmuc = $_POST['danhmuc'];
        $mota = $_POST['mota'];
        $filePath = $_SESSION['products'][$index]['hinhanh'];
        // Xóa tệp ảnh từ thư mục đích
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $targetDirectory = "./uploads/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        // Di chuyển tệp tạm thời vào thư mục đích
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "Tải ảnh lên thành công.";
        } else {
            echo "Không thể di chuyển ảnh vào thư mục đích.";
        }
        // Cập nhật thông tin sản phẩm
        $_SESSION['products'][$index]['id'] = $id;
        $_SESSION['products'][$index]['ten'] = $ten;
        $_SESSION['products'][$index]['gia'] = $gia;
        $_SESSION['products'][$index]['hinhanh'] = $targetFile;
        $_SESSION['products'][$index]['danhmuc'] = $danhmuc;
        $_SESSION['products'][$index]['mota'] = $mota;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            width: 800px !important;
        }
    </style>
    <title>Lab 4 - Bai 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <form action="" method="post" class="container" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id" class="form-label">ID:</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="name@example.com">
            <label for="ten" class="form-label">Name</label>
            <input type="text" class="form-control" id="ten" name="ten" placeholder="name@example.com">
            <label for="gia" class="form-label">Gia:</label>
            <input type="number" class="form-control" id="gia" name="gia" placeholder="name@example.com">
            <label for="hinhanh" class="form-label">Anh:</label>
            <input type="file" class="form-control" id="hinhanh" name="image" placeholder="name@example.com">
            <label for="danhmuc" class="form-label">Danh muc:</label>
            <input type="text" class="form-control" id="danhmuc" name="danhmuc" placeholder="name@example.com">
            <label for="mota" class="form-label">Mo ta:</label>
            <input type="text" class="form-control" id="mota" name="mota" placeholder="name@example.com">
            <input type="submit" class="form-control mt-4 bg-success text-white" name="add_product" value="Them san pham">

        </div>

    </form>
    <div class="container">
        <h2>Danh sách sản phẩm</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Danh mục</th>
                    <th>Mô tả</th>
                    <th>Hành động</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['products'])) {
                    foreach ($_SESSION['products'] as $index => $product) {
                        echo "<tr>";
                        echo "<td>" . $product['id'] . "</td>";
                        echo "<td>" . $product['ten'] . "</td>";
                        echo "<td>" . $product['gia'] . "</td>";
                        echo "<td><img src='" . $product['hinhanh'] . "' width='50' height='50'></td>";
                        echo "<td>" . $product['danhmuc'] . "</td>";
                        echo "<td>" . $product['mota'] . "</td>";
                        // Thêm biểu mẫu nhỏ để gửi yêu cầu xóa sản phẩm với chỉ số $index
                        echo "<td>
                        <form action='' method='post'>
                            <input type='hidden' name='index' value='" . $index . "'>
                            <input type='submit' name='open_update_product' value='Cập nhật'>
                        </form>
                    </td>";
                        // Hiển thị nút xóa cho sản phẩm
                        echo "<td>
                        <form action='' method='post'>
                            <input type='hidden' name='index' value='" . $index . "'>
                            <input type='submit' name='delete_product' value='Xóa'>
                        </form>
                    </td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <?
    if (isset($_POST['open_update_product'])) {
        $index = $_POST['index'];
        echo '<form action="" method="post" class="container" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id" class="form-label">ID:</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="' . $_SESSION['products'][$index]['id'] . '">
            <label for="ten" class="form-label">Name</label>
            <input type="text" class="form-control" id="ten" name="ten" placeholder="' . $_SESSION['products'][$index]['ten'] . '">
            <label for="gia" class="form-label">Gia:</label>
            <input type="number" class="form-control" id="gia" name="gia" placeholder="' . $_SESSION['products'][$index]['gia'] . '">
            <label for="hinhanh" class="form-label">Anh:</label>
            <input type="file" class="form-control" id="hinhanh" name="image" >
            <label for="danhmuc" class="form-label">Danh muc:</label>
            <input type="text" class="form-control" id="danhmuc" name="danhmuc" placeholder="' . $_SESSION['products'][$index]['danhmuc'] . '">
            <label for="mota" class="form-label">Mo ta:</label>
            <input type="text" class="form-control" id="mota" name="mota" placeholder="' . $_SESSION['products'][$index]['mota'] . '">
            <input type="hidden" name="index" value="' . $index . '">
            <input type="submit" class="form-control mt-4 bg-success text-white" name="update_product" value="Cap nhat sp">
        </div>

    </form>';
    }
    ?>

</body>
<form action="" method="post">
    <input type="submit" value="d">
</form>

</html>