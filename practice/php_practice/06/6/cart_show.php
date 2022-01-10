<?php

session_start();
session_regenerate_id();

$total = 0;

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
    <?php if (!isset($_SESSION['cart'])) : ?>
        カートは空です
    <?php else : ?>
        <table class="table">
            <thead>
                <th>商品名</th>
                <th class="num">価格</th>
                <th>小計</th>
                <th></th>
            </thead>
            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
                <?php foreach ($_SESSION['cart'] as $k => $v) : ?>
                    <form method="post" action="./cart_del.php">
                        <tr>
                            <td>
                                <?= $v['product_name'] ?>
                                <input type="hidden" name="product_name" value="<?= $v['product_name'] ?>">
                            </td>
                            <td class="num">
                                <?= $v['price'] ?>円
                                <input type="hidden" name="price" value="<?= $v['price'] ?>">
                            </td>
                            <td class="num">
                                <?= $v['num'] ?>
                                <input type="hidden" name="num" value="<?= $v['num'] ?>">
                            </td>
                            <td>
                                <?php
                                $sum = $v['price'] * $v['num'];
                                $total += $sum;
                                echo $sum . '円';
                                ?>
                            </td>
                            <td>
                                <input type="hidden" name="id" value="<?= $k ?>">
                                <input type="submit" value="削除">
                            </td>
                        </tr>
                    </form>
                <?php endforeach ?>
                </tbody>
            <?php endif ?>
        </table>
        <p>合計金額：<?= $total ?>円</p>
        <p><a href="./cart_del_all.php">カートを空にする</a></p>
    <?php endif ?>
    <p><a href="./">戻る</a></p>
</body>

</html>