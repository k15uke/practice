<?php
session_start();
session_regenerate_id();

if(empty($_SESSION['user'])){
    header('Location: ./login.php');
    exit;
}

require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');
require_once('./class/util/SaftyUtil.php');

if(!SaftyUtil::isValidToken($_POST['token'])){
    $_SESSION['msg']['err'] = Config::MSG_INVALID_PROCESS;
    header('Location: ./user_add.php');
    exit;
}

if(!isset($_FILES['csv_file']) || $_FILES['csv_file']['error'] > 0){
    $_SESSION['msg']['err'] = Config::MSG_UPLOAD_FAILURE;
    header('Location: ./upload.php');
    exit;
}

if(!$fp = @fopen($_FILES['csv_file']['tmp_name'],'r')){
    $_SESSION['msg']['err'] = Config::MSG_UPLOAD_FAILURE;
    header('Location: ./upload.php');
    exit;
}

try{
    $db = new TodoItems();

    $db->begin();

    while(($buf = fgetcsv($fp)) !== false){
        $db->update($buf[0],$buf[1],mb_convert_encoding($buf[2],'UTF-8','SJIS-win'),$buf[3]);
    }
    $db->commit();

    header('Location: ./');
    exit;
}catch (Exception $e){
    $_SESSION['msg']['err'] =Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}