<?php

session_start();
session_regenerate_id(true);
if (isset($_SESSION['member_login']) == false) {
    print 'ようこそゲスト様';
    print '<a href="member_login.html">会員ログイン</a><br>';
} else {
    print 'ようこそ';
    print $_SESSION['member_name'];
    print '様';
    print '<br>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品参照</title>
</head>

<body>
    <?php

    try {
        if (isset($_SESSION['cart']) == true) {
            $cart = $_SESSION['cart'];
            $kazu = $_SESSION['kazu'];
            $max = count($cart);
        } else {
            $max = 0;
        }





        if ($max == 0) {
            print 'カートに商品が入っていません<br>';
            print '<br>';
            print '<a href="shop_list.php">商品一覧へ戻る</a>';
            exit();
        }

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        foreach ($cart as $key => $val) {
            $sql = 'SELECT code,name,price,gazou FROM mst_product WHERE code=?';
            $stmt = $dbh->prepare($sql);
            $data[0] = $val;
            $stmt->execute($data);

            $rec = $stmt->fetch(PDO::FETCH_ASSOC);

            $pro_name[] = $rec['name'];
            $pro_price[] = $rec['price'];
            if ($rec['gazou'] == '') {
                $pro_gazou[] = '';
            } else {
                $pro_gazou[] = '<img src="../product/gazou/' . $rec['gazou'] . '">';
            }
        }
        $dbh = null;
    } catch (exception $e) {
        print 'ただいま障害により大変ご迷惑をおかけしております。';
        exit();
    }


    ?>

    カートの中身<br>
    <br>
    <form method="post" action="kazu_change.php">
        <table border="1">
            <tr>
                <td>商品</td>
                <td>商品画像</td>
                <td>価格</td>
                <td>数量</td>
                <td>小計</td>
                <td>削除</td>
            </tr>

            <?php for ($i = 0; $i < $max; $i++) { ?>
                <br>
                <tr>
                    <td><?php print $pro_name[$i] . '<br>'; ?></td>
                    <td><?php print $pro_gazou[$i] . '<br>'; ?></td>
                    <td><?php print $pro_price[$i] . '円' . '<br>'; ?></td>
                    <td><input type="text" name="kazu<?php print $i; ?>" value="<?php print $kazu[$i]; ?>">個<br></td>
                    <td><?php print $pro_price[$i] * $kazu[$i]; ?>円</td>
                    <td><input type="checkbox" name="sakujo<?php print $i; ?>"></td>
                </tr>
            <?php  } ?>
        </table>
        <input type="hidden" name="max" value="<?php print $max; ?>">
        <input type="submit" value="数量変更"><br>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="button" onclick="location.href='clear_cart.php'" value="カートを空にする">

    </form>
    <br>
    <a href="shop_form.html">ご購入手続きへ進む</a><br>
    <?php
    if (isset($_SESSION["member_login"]) == true) {
        print '<a href="shop_kantan_check.php">会員簡単注文へ進む</a><br>';
    }
    ?>

</body>

</body>

</html>