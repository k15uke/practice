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
            'product_name' => 'みかん',
            'production_area' => '愛媛県',
            'quality' => '優',
            'price' => 3000,
            'num' => 5,
        ],
        1 => [
            'product_name' => 'りんご',
            'production_area' => '青森県',
            'quality' => '優',
            'price' => 5000,
            'num' => 2
        ],
        2 => [
            'product_name' => 'バナナ',
            'production_area' => 'フィリピン',
            'quality' => '優',
            'price' => 1500,
            'num' => 3
        ],
    ];
    print '<table border="1">';
    print '<th>品名</th>';
    print '<th>産地</th>';
    print '<th>品質</th>';
    print '<th>価格(円)</th>';
    print '<th>数量</th>';
    print '<th>小計(円)</th>';
    $sum = 0;
    foreach ($products as $product) {
        print '<tr>';
        print '<td>' . $product['product_name'] . '</td>';
        print '<td>' . $product['production_area'] . '</td>';
        print '<td>' . $product['quality'] . '</td>';
        print '<td>' . $product['price'] . '</td>';
        print '<td>' . $product['num'] . '</td>';
        print '<td>' . $product['price'] * $product['num'] . '</td>';
        $sum += $product['price'] * $product['num'];
    }
    print '</tr>';

    print '合計金額：'.$sum.'円' ;
    ?>
</body>

</html>