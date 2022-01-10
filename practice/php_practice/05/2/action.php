<?php
$num = $_POST['num'];
$celi = ceil($num);
$floor = floor($num);
$round = round($num);

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
        <th>切り上げ</th>
        <th>切り捨て</th>
        <th>四捨五入</th>
    </tr>
    <tr>
        <td><?= $celi ?></td>
        <td><?= $floor ?></td>
        <td><?= $round ?></td>
</body>

</html>