<?php
session_start();
session_regenerate_id(true);
if (isset($_SESSION['login']) == false) {
    print 'ログインされていません。<br>';
    print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ろくまる農園</title>
</head>
<?php require_once('../common/common.php'); ?>
<body>
    ダウンロードしたい注文日を選んでください。<br>
    <form method="post" action="order_download_done.php">
        <?php pulldown_year();?>
        年
        <?php pulldown_month();?>
        月
        <?php pulldown_day();?>
        日<br>
        <input type="submit" value="ダウンロードへ">
    </form>
</body>

</html>