<?php

function isLengthWithinLimit($str,$limit){
    if(mb_strlen($str) > $limit){
        return false;
    }
    return true;
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
    <?php if(isLengthWithinLimit($_POST['str'],50)) : ?>
        入力されたのは50文字以内です。
    <?php else: ?>
        入力されたのは50文字以上です。
    <?php endif ?>

</body>
</html>