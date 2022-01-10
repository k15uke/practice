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
        ],
        1 => [
            'product_name' => 'りんご',
            'production_area' => '青森県',
            'quality' => '優',
            'price' => 5000,
        ],
        2 => [
            'product_name' => 'バナナ',
            'production_area' => 'フィリピン',
            'quality' => '優',
            'price' => 1500,
        ],
    ];
        print '<table border="1">';
        print '<th>品名</th>';
        print '<th>産地</th>';
        print '<th>品質</th>';
        print '<th>価格(円)</th>';
        foreach ($products as $product){
            print '<tr>';
            foreach($product as $value){
            print '<td>'.$value.'</td>';
            }
        }
        print '</tr>';
    ?>
</body>
</html>