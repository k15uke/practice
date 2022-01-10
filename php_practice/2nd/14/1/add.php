<?php
session_start();
session_regenerate_id();

if(!isset($_SESSION['token']) || $_SESSION['token'] !== $_POST['token']){
    $_SESSION['err_msg'] = "不正な処理が行われました。";
    header('Location: ./');
    exit;
}

unset($_SESSION['err_msg']);

$date = htmlspecialchars ($_POST['expiration_date']);
$item = htmlspecialchars($_POST['todo_item']);

$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';

$dbh = new PDO($dsn, 'root','');
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = '';
$sql .= 'insert into todo_items (';
$sql .= 'expiration_date';
$sql .= 'todo_item';
$sql .= ') values (';
$sql .= ':expiration_date,';
$sql .= ':todo_item';
$sql .= ')';

$stmt = $dbh->prepare($sql);

$stmt->bindValue(':expiration_date',$date,PDO::PARAM_STR);
$stmt->bindValue(':todo_item',$item,PDO::PARAM_STR);

$stmt->execute();

header('Location: ./');
exit;