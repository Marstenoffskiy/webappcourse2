<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="task011.php" method="POST">
    <textarea name="symb" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Next"><br>
    </form>
    <?php
        $symb = $_POST['symb'];

        function translit($translit)
        {
            $alphavit =[
                'А' => 'A', 'а' => 'a', 'Б' => 'B','б' => 'b','В' => 'V','в' => 'V','Д' => 'D','д' => 'd','Г' => 'G','г' => 'g','Е' => 'E','е' => 'e','Ё' => 'YO','ё' => 'yo','Ж' => 'ZH','ж' => 'zh','З' => 'Z','з' => 'z','И' => 'I', 'и' => 'i', 'Й' => 'J', 'й' => 'j','К' => 'K','к' => 'k','Л' => 'L','л' => 'l','М' => 'M','м' => 'm','Н' => 'N','н' => 'n','О' => 'O','о' => 'o','П' => 'P','п' => 'p','Р' => 'R','р' => 'r','С' => 'S','с' => 's','Т' => 'T','т' => 't','У' => 'U','у' => 'u','Ф' => 'F','ф' => 'f','Х' => 'H','х' => 'h','Ц' => 'C','ц' => 'c','Ч' => 'CH','ч' => 'ch','Ш' => 'SH','ш' => 'sh','Щ' => 'SHCH','щ' => 'shch','Ъ' => '','ъ' => '','Ы' => 'Y','ы' => 'y',
                'Ь' => '','ь' => '','Э' => 'E','э' => 'e','Ю' => 'YU','ю' => 'yu','Я' => 'YA','я' => 'ya'
            ];
        
            return strtr($translit, $alphavit);

        }
 
        echo translit($symb);

    ?>

</body>
</html>