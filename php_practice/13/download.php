<?php

session_start();
session_regenerate_id();

require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

if(empty($_SESSION['user'])){
    header('Location: ./login.php');
    exit;
}

try{
    $db = new TodoItems();
    $list = $db->selectAll();
}catch(Exception $e){
    var_dump($e);
    exit;
}

foreach ($list as $val){
    foreach ($val as $k => $v){
        if($k == 'todo_item'){
            $val[$k] = mb_convert_encoding($v,'SJIS-win','UTF-8');
        }
    }
    echo implode(',',$val). "\n";
}