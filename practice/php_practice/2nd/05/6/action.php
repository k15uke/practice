<?php

function isDate($str){
    $d = explode('/',$str);
    return checkdate($d[1],$d[2],$d[0]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isDate($_POST['str'])) : ?>
        入力されたのは正しい日付です
    <?php else : ?>
        入力された日付は正しくありません。
    <?php endif ?>
</body>
</html>