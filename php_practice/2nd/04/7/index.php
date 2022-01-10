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

    $product = [
        'product_name' => 'みかん',
        'production_area' => '愛媛県',
        'quality' => '優',
        'price' => '3000'
    ];
    ?>

    <?php foreach ($product as $key => $value) : ?>
        
            <table>
            <table border="1">
                <thead></thead>
                <tr>
                    <td> <?= $key ?></td>

                    <td><?= $value ?></td>
                </tr>

            </table>
        <?php endforeach ?>
</body>

</html>