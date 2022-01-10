<?php

session_start();
session_regenerate_id();

if (isset($_SESSION['err']['msg'])) {
    unset($_SESSION['err']);
}

$path = __DIR__ . '/images/';
$tmp = scandir($path);

$files = [];
foreach ($tmp as $v) {
    if (!preg_match('/^\./', $v) && is_file('./images/' . $v)) {
        $files[] = $v;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>

<body>
    <div class="slide-wrapper">
        <h2 class="slide-title">アップロードされた画像の一覧</h2>
        <div class="change-btn-wrapper">
            <div class="change-btn prev-btn">←前へ</div>
            <div class="change-btn next-btn">次へ →</div>
        </div>
        <ul class="slides">
            <?php for ($i = 0; $i < count($files); $i++) : ?>
                <li class="slide<?php if ($i == 0) echo 'active' ?>"><img src="./images/<?= $files[$i] ?>"></li>
            <?php endfor ?>
        </ul>
        <div class="index-btn-wrapper">
            <?php for ($i = 1; $i <= count($files); $i++) : ?>
                <div class="index-btn"><?= $i ?></div>
            <?php endfor ?>
        </div>
        <p><a href="./">←もどる</a></p>
    </div>
    <script type="text/javascript" src=".js/script.js"></script>
</body>

</html>