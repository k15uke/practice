<?php

require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try{
    $db = new TodoItems();
    $db->insert($_POST['expiration_date'],$_POST['todo_item']);

    header('Location: ./');
    exit;
}catch(Exception $e){
    var_dump($e);
    exit;
}