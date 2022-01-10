<?php

require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try{
    $db = new TodoItems();

    if(isset($_POST['delete']) && $_POST['delete'] == "1"){
        $db->delete($_POST['id']);
    }else{
        $db->updateIsCompletedByID($_POST['id'],$_POST['is_completed']);
    }
    header('Location: ./');
    exit;
}catch (Exception $e){
    var_dump($e);
    exit;
}