<?php

session_start();
session_regenerate_id();

if(empty($_SESSION['user'])){
    header('Location: ./login.php');
    exit;
}

require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');
require_once('./class/util/SafetyUtil.php');

if(!Safty_Util::isValidToken($_POST['token'])){
    $_SESSION['msg']['err'] = Config::MSG_INVALID_PROCESS;
    header('Location: ./');
}

unset($_SESSION['msg']['err']);

try{
    $db = new TodoItems();

    $db->insert($_POST['expiration_date'],$_POST['todo_item']);

    header('Location: ./');

}catch (Exception $e){
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}