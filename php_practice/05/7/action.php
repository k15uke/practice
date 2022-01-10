<?php
function isLengthWithinLimit($str, $limit) {
    if (mb_strlen($str) > $limit) {
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
    <tr>

    </tr>
    <tr>
        <?php
         if(isLengthWithinLimit($_POST['str'],50)){
             print '50文字以内';
         }else{
             print '50文字以上';
         }
         ?>
</body>

</html>