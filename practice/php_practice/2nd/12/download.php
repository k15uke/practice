<?php
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try{
    $db = new TodoItems();
    $list = $db->selectAll();
    
}catch (Exception $e){
    var_dump($e);
    exit;
}

header('Content-Type: text/csv');
header('content-Disposition: attachment;filename="work.csv"');

foreach($list as $val){
    foreach($val as $k => $v){
        if($k == 'todo_item'){
            $val[$k] = mb_convert_encoding($v,'SJIS-win','UTF-8');
        }
    }
    echo implode(',',$val)."\n";
}