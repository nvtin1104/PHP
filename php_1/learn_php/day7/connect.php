<?php
// tao global setting
define("USERNAME", "root");
define("PASSWORD", "1104");
define("HOST", "localhost");
define("DB_NAME", "php_1");


try {
    $url = "mysql:host=" . HOST . ";dbname=" . DB_NAME . "";
    $connection = new PDO($url, USERNAME, PASSWORD);
} catch (PDOException $e) {
    echo $e->getMessage();
}
