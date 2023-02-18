<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="task010.php" method="POST">
    <textarea name="symb" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Next"><br>
    </form>
<?php
if (isset($_POST['symb'])) {
    $symb = $_POST['symb'];
    $str = count(mb_str_split(str_replace(' ', '', $symb)));
    $valuesCount = array_count_values(mb_str_split(str_replace(' ', '', $symb)));
    foreach ($valuesCount as $key => $item) {
        echo $key.' - '.round(100 / $str * $item, 2).'%'.'<br>';
    }
}
?>
</body>
</html>