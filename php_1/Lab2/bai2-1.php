<?
$color  = array( 'red', 'green', 'blue');
print_r($color);
echo "<br>";
echo $color[0];

// Bài 2
$age = array();
$age[0] = 10;
$age[1] = 20;
$age[2] = 30;
print_r($age);

$salaries = array(
    "mohammad" => 2000,
    "qadir" => 1000,
    "xara" => 500
);
echo "Salary of mohammad is " . $salaries['mohammad']. "<br/>";
echo "Salary of qadir is " . $salaries['qadir']. "<br/>";
echo "Salary of xara is " . $salaries['xara']. "<br/>";
// Bài 3

define ('LOCATOR', '/locator');
define ('tuoi', '20');
define ('CLASSES', LOCATOR."/code/classes");
define('FUNTIONS', LOCATOR."/code/functions");
define('USERDIR', LOCATOR."/user");
echo tuoi;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>