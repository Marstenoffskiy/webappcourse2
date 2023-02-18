<?php
$datatime = date('L');
if($datatime == 1){
    $days = 366-date('z');
    echo $days.' дней до Нового Года';
}
else{
    $days = 365 - date('z');
    echo $days.' дней до Нового Года';
}

?>