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
    $db->insert($_POST['expiration_date'],$_POST['todo_item']);

    header('Location: ./');
    exit;

}catch(Exception $e){
    var_dump($e);
    exit;
}