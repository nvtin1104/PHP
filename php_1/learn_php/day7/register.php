<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <?php
    require_once("./connect.php");
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $name = $_POST['name'];

        $errors = [];
        if (strlen($username) < 1) {
            $errors[] =  "username not empty";
        }
        if (strlen($password) < 6) {
            $errors[] =  "password not empty and > 6 ky tu";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "email invalid email format";
        }
        if (isset($connection) && count($errors) < 1) {
            try {
                $sql_check = "SELECT * FROM users where  username = :username";
                $statement = $connection->prepare($sql_check);
                $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                $statement->execute([
                    ':username' => $username,
                ]);
                $count = $statement->rowCount();
                if ($count > 0) {
                    echo "Alredy exists in database";
                } else {
                    $sql = "INSERT INTO users(username, password, role, email, name) VALUES(:username, :password, :role, :email, :name)";
                    $statement = $connection->prepare($sql);
                    // ma hoa mat khau
                    if ($statement->execute([
                        ':password' => password_hash($password, PASSWORD_DEFAULT),
                        ':role' => 1, ':username' => $username,
                        ":email" => $email,
                        ":name" => $name,

                    ])) {
                        $message = 'tạo thành công';
                        header("Location: login.php");
                        exit;
                    } else {
                        echo "not create success";
                    }
                }
            } catch (Exception $err) {
                echo $err->getMessage();
            }
        }
    }

    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Register</h2>
                <?php
                if (isset($errors) &&   count($errors) > 0) { ?>

                    <div class="alert alert-danger" role="alert">
                        <?php echo join("<br/>", $errors) . ""; ?>
                    </div>
                <?php }
                ?>
                <?php
                if (isset($message)) { ?>

                    <div class="alert alert-success" role="alert">
                        <?php echo $message; ?>
                    </div>
                <?php } ?>
                <form action="./register.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="name" class="form-control" name="name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="password">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>