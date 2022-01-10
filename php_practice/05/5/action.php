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
        <?php if (is_numeric($_POST['str'])) : ?>
            入力されたのは数字です。
        <?php else : ?>
            入力されたのは数字ではありません。
        <?php endif ?>
</body>

</html>