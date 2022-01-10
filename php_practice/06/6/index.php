<?php
$products = [
    0 => [
        'product_name' => 'みかん',
        'price' => '300',
    ],

    1 => [
        'product_name' => 'りんご',
        'price' => '500',
    ],

    2 => [
        'product_name' => 'バナナ',
        'price' => '150',
    ],
];

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
        <thead>
            <th>商品名</th>
            <th>価格</th>
            <th>注文数</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($products as $v) : ?>
                <form method="post" action=./cart_add.php>
                    <tr>
                        <td>
                            <?= $v['product_name'] ?>
                            <input type="hidden" name="product_name" value="<?= $v['product_name'] ?>">
                        </td>
                        <td>
                            <?= $v['price'] ?>円
                            <input type="hidden" name="price" value="<?= $v['price'] ?>">
                        </td>
                        <td>
                            <input type="text" name="num" style="width:3rem; text-align:right;">
                        </td>
                        <td>
                            <input type="submit" value="カートに入れる">
                        </td>
                    </tr>
                </form>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="./cart_show.php">カートを見る</a>


</body>

</html>