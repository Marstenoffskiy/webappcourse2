<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $holidays = [
        '2023-02-18' => 'HolidayOne', '2023-02-19' => 'HolidayTwo', '2023-02-20' => 'HolidayThree', '2023-02-21' => 'HolidayFour', '2023-02-22' => 'HolidayFive', '2023-02-23' => 'HolidaySix', '2023-02-24' => 'HolidaySeven', '2023-02-25' => 'HolidayEight', '2023-02-26' => 'HolidayNine', '2023-02-27' => 'HolidayTen'
    ];
    $holiday = date('Y-m-d');
    echo 'Поздравляем с '. $holidays[$holiday];
    ?>
</body>
</html>