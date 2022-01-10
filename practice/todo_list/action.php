<?php

try {

    $dsn = 'mysql:dbname=todo_list;host=localhost;charset=utf8';
    $dbh = new PDO($dsn, 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['is_deleted']) == 1) {
        $sql = 'update todo_items set ';
        $sql .= 'is_deleted=1 ';
        $sql .= 'where id=:id';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
        $stmt->execute();

    } else {
        $sql = '';
        $sql .= 'update todo_items set ';
        $sql .= 'is_completed=:value ';
        $sql .= 'where id=:id';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':id',$_POST['id'],PDO::PARAM_INT);
        $stmt->bindValue(':value',$_POST['is_completed'],PDO::PARAM_INT);
        $stmt->execute();    
    }
    header('Location: ./');

} catch (Exception $e) {
    var_dump($e);
    exit;
}

