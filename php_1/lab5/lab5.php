<?php

class Product
{
    private $name;
    private $image;
    private $description;
    private $price;
    private $status;
    private $createdAt;
    private $categoryId;

    // Hàm khởi tạo
    public function __construct($name, $image, $description, $price, $status, $createdAt, $categoryId)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
        $this->status = $status;
        $this->createdAt = $createdAt;
        $this->categoryId = $categoryId;
    }

    // Hàm getter và setter cho thuộc tính Name
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // Hàm getter và setter cho thuộc tính Image
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    // Hàm getter và setter cho thuộc tính Description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Hàm getter và setter cho thuộc tính Price
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Hàm getter và setter cho thuộc tính Status
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    // Hàm getter và setter cho thuộc tính CreatedAt
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    // Hàm getter và setter cho thuộc tính CategoryId
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
}

class Category
{
    private $catId;
    private $name;
    private $description;
    private $image;

    // Hàm khởi tạo
    public function __construct($catId, $name, $description, $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
    }

    // Hàm getter và setter cho thuộc tính Name
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getId()
    {
        return $this->catId;
    }

    public function setId($catId)
    {
        $this->catId = $catId;
    }

    // Hàm getter và setter cho thuộc tính Description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Hàm getter và setter cho thuộc tính Image
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}

class User
{
    private $username;
    private $password;
    private $role;
    private $name;
    private $email;

    // Hàm khởi tạo
    public function __construct($username, $password, $role, $name, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->name = $name;
        $this->email = $email;
    }

    // Hàm getter và setter cho thuộc tính Username
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    // Hàm getter và setter cho thuộc tính Password
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    // Hàm getter và setter cho thuộc tính Role
    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    // Hàm getter và setter cho thuộc tính Name
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // Hàm getter và setter cho thuộc tính Email
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
// Tạo đối tượng Product
$product = new Product('Quan chip', 'sanpham.jpg', 'Quan chip nam gia re', 1000, 'no', '2023-07-19', 4);
$category = new Category('1', 'Ao khoác', 'Áo khoác lông bog vjp bro', 'sanpham.jpg');
echo "Thong tin sản phẩm " . "<br>";
// Sử dụng hàm getter để lấy thông tin của sản phẩm
echo "Tên sản phẩm:" . $product->getName() . "<br />";
echo "Giá cũ:" . $product->getPrice() . "<br />";
// Sử dụng hàm setter để cập nhật thông tin của sản phẩm
$product->setPrice(12000);
echo "Giá Mới:" . $product->getPrice() . "<br />";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h2> Thông tin Product</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td><?php echo $product->getName(); ?></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="<?php echo $product->getImage(); ?>" alt="Product Image" style="max-width: 100px;"></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $product->getDescription(); ?></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><?php echo $product->getPrice(); ?></td>
                </tr>
                <tr>
                    <th>CreatedAt</th>
                    <td><?php echo $product->getCreatedAt(); ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><?php echo $product->getStatus(); ?></td>
                </tr>
                <tr>
                    <th>ID</th>
                    <td><?php echo $product->getCategoryId(); ?></td>
                </tr>
            </tbody>
        </table>

        <h2>Thông tin Category</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td><?php echo $category->getId(); ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo $category->getName(); ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $category->getDescription(); ?></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="<?php echo $category->getImage(); ?>" alt="Category Image" style="max-width: 100px;"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>