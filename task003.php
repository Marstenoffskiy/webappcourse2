<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="task003.php" method="POST">
    <input id="date" type="date" name="data" >
        <input type="submit" value="Next"><br>
    
    </form>
<?php
if (isset($_POST['data'])) {
    $translit = [
        "Monday" => "Понедельник",
        "Tuesday" => "Вторник",
        "Wednesday" => "Среда",
        "Thursday" => "Четверг",
        "Friday" => "Пятница",
        "Saturday" => "Суббота",
        "Sunday" => "Воскресенье"
    ];
    $date = date_create($_POST['data']);
    $day = date_format($date, 'l');
    $dayrus = strtr($day,$translit);
    echo $dayrus;
}
?>

</body>

</html>