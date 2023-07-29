<?php
include_once("./connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (strlen($username) < 1 || strlen($password) < 6) {
            echo "Username must not be empty, and password must be at least 6 characters long.";
        } else {
            try {
                $sql_check = "SELECT * FROM users WHERE username = :username";
                $statement = $connection->prepare($sql_check);
                $statement->execute([
                    ':username' => $username,
                ]);

                $user = $statement->fetch(PDO::FETCH_ASSOC);
                if ($user && password_verify($password, $user['password'])) {
                    // User login successful
                    echo "Login successful!";
                } else {
                    echo "Invalid username or password.";
                }
            } catch (Exception $err) {
                echo $err->getMessage();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h2>Login</h2>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
