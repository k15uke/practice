<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
       $products = [
        0 => [
            '品名' => 'みかん',
           '産地' => '愛媛県',
            '品質' => '優',
            '価格' => 3000,
            '数量' => 5,
        ],
        1 => [
            '品名' => 'りんご',
            '産地' => '青森県',
            '品質' => '優',
            '価格' => 5000,
            '数量' => 2
        ],
        2 => [
            '品名' => 'バナナ',
            '産地' => 'フィリピン',
            '品質' => '優',
            '価格' => 1500,
            '数量' => 3
        ],
    ];
        print '<table border="1">';
        print '<th>品名</th>';
        print '<th>産地</th>';
        print '<th>品質</th>';
        print '<th>価格(円)</th>';
        print '<th>数量</th>';
        print '<th>小計(円)</th>';
        foreach ($products as $product){
            print '<tr>';
            foreach($product as $value){
            print '<td>'.$value.'</td>';
            }
        }
        print ''
        print '</tr>';
    ?>
</body>
</html>