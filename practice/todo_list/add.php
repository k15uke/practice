<?php 

try{
    $expiration_date = $_POST['expiration_date'];
    $todo_item = $_POST['todo_item'];
    
    $dsn = 'mysql:dbname=todo_list;host=localhost;charset=utf8';
    $dbh = new PDO($dsn, 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = '';
    $sql .= 'insert into todo_items (';
    $sql .= 'expiration_date,';
    $sql .= 'todo_item';
    $sql .= ') values (';
    $sql .= ':expiration_date,';
    $sql .= ':todo_item';
    $sql .= ')';

    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':expiration_date', $expiration_date, PDO::PARAM_STR);
    $stmt->bindValue(':todo_item', $todo_item, PDO::PARAM_STR);
    $stmt->execute();

    header('Location: ./');
}catch (Exception $e){
    var_dump($e);
    exit;
}