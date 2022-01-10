<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

$max = max($num1, $num2, $num3);
$min = min($num1, $num2, $num3);
$ave = ($num1 + $num2 + $num3) / 3;

function ave($num1, $num2, $num3)
{
    $ave = round(($num1 + $num2 + $num3) / 3);
    return $ave;
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
        <th>最大値</th>
        <th>最小値</th>
        <th>平均値</th>
    </tr>
    <tr>
        <td><?= $max ?></td>
        <td><?= $min ?></td>
        <td><?= $ave ?></td>
</body>

</html>