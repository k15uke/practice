<?php

$num = $_POST['num'];

$ceil = ceil($num);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <table class="table table-bordered">
        <tr>
            <th>切り上げ</th>
            <th>切り捨て</th>
            <th>四捨五入</th>
        </tr>
            <td><?= $ceil ?></td>
            <td><?= $floor ?></td>
            <td><?= $round ?></td>
</tr>
    </table>
</head>
<body>
    
</body>
</html>