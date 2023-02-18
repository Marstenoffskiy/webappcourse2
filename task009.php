<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="task009.php" method="POST">
    <textarea name="symb" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Next"><br>
    </form>
<?php
if (isset($_POST['symb'])) {
    $symb = $_POST['symb'];
    $symbol = strlen($symb);
    $words = count(explode(' ', $symb));
    $space = count(explode(' ', $symb)) - 1;
    echo 'Символов: ' .$symbol. '<br>'. 'Слов: ' .$words. '<br>'. 'Пробелов: '.$space;
}
?>
</body>
</html>