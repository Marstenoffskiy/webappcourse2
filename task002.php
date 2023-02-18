<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="task001.php" method="POST">
        <label for="god">Введите год</label><br>
        <input id="god" name="god" type="text"><br>
        <input type="submit" value="Next"><br>
    
    </form>
<?php
if(isset($_POST['god'])){
    $g = $_POST['god'];



    if ($g % 4 == 0 && $g % 400 == 0 || $g % 100 != 0){
        $message = "Год Високосный.<br>";
    }
    else {
        $message = "Не Високосный <br>";
    }
    echo $message;
}
?>

</body>

</html>


