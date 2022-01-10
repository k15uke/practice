<?php
session_start();
session_regenerate_id();

if(isset($_SESSION['count']) && isset($_GET['reset'])){
    unset($_SESSION['count']);
}

if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
}else{
    $_SESSION['count']++;
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
    <?= $_SESSION['count'] ?>
    <a href="./">カウント</a>
    <a href="./?reset">リセット</a>
</body>
</html>