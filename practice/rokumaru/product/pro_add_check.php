<?php
session_start();
session_regenerate_id(true);
if (isset($_SESSION['login']) == false) {
    print 'ログインされていません。<br>';
    print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
    exit();
} else {
    print $_SESSION['staff_name'];
    print 'さんがログイン中<br>';
    print '<br>';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品追加確認</title>
</head>

<body>
    <?php
    require_once('../common/common.php');
    $post = sanitize($_POST);
    $pro_name = $post['name'];
    $pro_price = $post['price'];

    $pro_gazou = $_FILES['gazou'];

    $pro_name = htmlspecialchars($pro_name, ENT_QUOTES, 'UTF-8');
    $pro_price = htmlspecialchars($pro_price, ENT_QUOTES, 'UTF-8');

    if ($pro_name == '') {
        print '商品名が入力されていません。<br />';
    } else {
        print '商品名';
        print $pro_name;
        print '<br />';
    }
    if (preg_match('/\A[0-9]+\z/', $pro_price) == 0) {
        print '価格をきちんと入力してください。';
    } else {
        print '価格';
        print $pro_price;
        print '円<br />';
    }
    if ($pro_gazou['size'] > 0) {
        if ($pro_gazou['size'] > 100000) {
            print '画像が大きすぎます';
        } else {
            move_uploaded_file($pro_gazou['tmp_name'], './gazou/' . $pro_gazou['name']);
            print '<img src="./gazou/' . $pro_gazou['name'] . '">';
            print '<br>';
        }
    }

    if ($pro_name == '' || preg_match('/\A[0-9]+\z/', $pro_price) == 0 || $pro_gazou['size'] > 1000000) {
        print '<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '</form>';
    } else {
        print '上記の商品を追加します。<br />';
        print '<form method="post" action="pro_add_done.php">';
        print '<input type="hidden" name="name" value="' . $pro_name . '">';
        print '<input type="hidden" name="price" value="' . $pro_price . '">';
        print '<input type="hidden" name="gazou_name" value="' . $pro_gazou['name'] . '">';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '<input type="submit" value="OK">';
        print '</form>';
    }

    ?>
</body>

</html>