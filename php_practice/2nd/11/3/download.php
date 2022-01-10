<?php
try{
    $dsn ='mysql:dbname=php_work;host=localhost;charset=utf8';
    $dbh = new PDO($dsn, 'root','');

    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = 'select * from todo_items order by expiration_date';
    
    $stmt = $dbh->prepare($sql);

    $stmt->execute();
    
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
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