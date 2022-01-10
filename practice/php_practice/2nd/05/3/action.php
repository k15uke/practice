<?php
$str = $_POST['str'];
$len = mb_strlen($str);

$firstChar = mb_substr($str,0,1);
$lastChar = mb_substr($str, $len-1,1);
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
    <table>
    <tr>
        <th>文字数</th>
        <th>最初の文字</th>
        <th>最後の文字</th>
    </tr>
    <tr>
        <td><?= $len ?></td>
        <td><?= $firstChar ?></td>
        <td><?= $lastChar ?></td>
    </tr>
</table>
</body>
</html>