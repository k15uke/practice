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

unset($_SESSION['msg']['err']);

try{
    $db = new TodoItems();
    $list = $db->selectAll();
}catch (Exception $e){
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}

header('Content-Type: text/csv');
header('content-Disposition: attachment; filename="work.csv"');

foreach($list as $val){
    foreach ($val as $k => $v){
        if($k == 'todo_item'){
            $val[$k] = mb_convert_encoding($v,'SJIS-win','UTF-8');
        }
    }
    echo implode(',',$val)."\n";
}