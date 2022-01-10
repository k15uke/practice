<?php
session_start();
session_regenerate_id();

require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

if(empty($_SESSION['user'])){
    header('Location: ./login.php');
    exit;
}

$msg = 'アップロードに失敗しました。';

if(!isset($_FILES['csv_file']) || $_FILES['csv_file']['error'] > 0){
    $_SESSION['err']['msg'] = $msg;
    header('Location: ./upload.php');
    exit;
}

$fp = fopen($_FILES['csv_file']['tmp_name'],'r');

try{
    $db = new TodoItems();
    while (($buf = fgetcsv($fp)) !== false){
        $db->update($buf[0],$buf[1],mb_convert_encoding($buf[2],'UTF-8','SJIS-win'),$buf[3]);
    }
}catch (Exception $e){
    var_dump($e);
    $_SESSION['err']['msg'] = $msg;
    header('Location: ./upload.php');
    exit;
}