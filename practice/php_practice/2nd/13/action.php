<?php

session_start();
session_regenerate_id();

require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

if(empty($_SESSION['user']))
{
    header('Location: ./login.php');
    exit;
}

try{
    $db = new TodoItems();

    if(isset($_POST['delete']) && $_POST['delete'] == "1")
    {
        $db->delete($_POST['id']);
    }else{
        $db->updateIsCompletedByID($_POST['id'],$_POST['is_completed']);
    }

    header('Location: ./');
    exit;
} catch (Exception $e){
    var_dump($e);
    echo $e;
    exit;
}