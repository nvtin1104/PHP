<?
class account{
    public $username ;
    private $password ;
    public $email;
    private $id;
    function __construct(){
        
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
<form action="t.php" method="post">
    <label for="masp">Masp:</label>
    <input type="text" name="masp" id="masp">
    <label for="ten Sp">Ten sp:</label>
    <input type="text" name="tenSP" id="tenSp"> 
    <label for="gia">Gia:</label>
    <input type="text" name="gia" id="gia">
    <label for="solong">Soluong:  </label>
    <input type="text" name="soluong" id="soluong">
    <input class="bg-danger" type="submit" value="Check" name="check-sp">
    <input class="bg-danger" type="submit" value="Add san pham" name="add-sp">
    <input type="submit" value="Delete" name="delete-sp">
</form>
</body>

</html>