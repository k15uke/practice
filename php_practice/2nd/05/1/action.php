<?php

$first = $_POST['1st'];
$second = $_POST['2nd'];
$third = $_POST['3rd'];

$max = max($first,$second,$third);

$min = min($first,$second,$third);

$ave = ave($first,$second,$third);

function ave($first,$second,$third){
    $ave = round(($first + $second + $third) /3 );
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <table class="table table-bordered">
        <tr>
            <th>最大値</th>
            <th>最小値</th>
            <th>平均値</th>
        </tr>
            <td><?= $max ?></td>
            <td><?= $min ?></td>
            <td><?= $ave ?></td>
</tr>
    </table>
</head>
<body>
    
</body>
</html>