<?php

session_start();
session_regenerate_id();

if(empty($_SESSION['user'])){
    header('Location: ./login.php');
    exit;
}

require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/cb/TodoItems.php');
require_once('./class/util/SaftyUtil.php');

if(!SaftyUtil::isValidToken($_POST['token'])){
    $_SESSION['msg']['err'] = Config::MSG_INVALID_PROCESS;
    header('Location: ./');
    exit;
}

unset($_SESSION['msg']['err']);

try{
    $db = new TodoItems();

    if(isset($_POST['delete']) && $_POST['delete'] == "1"){
        $db->delete($_POST['id']);
    }else{
        $db->updateIsCompletedByID($_POST['id'],$_POST['is_completed']);
    }

    header('Location: ./');
    exit;
}catch(Exception $e){
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}
