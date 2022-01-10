<?php
session_start();
session_regenerate_id();

$_SESSION['str'] = $_POST['str'];
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
    入力された文字は<br>
    <p><?= $_POST['str'] ?></p>
    <p><a href="./">戻る</a>
</body>
</html>