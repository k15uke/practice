<?php

session_start();
session_regenerate_id();

require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/Users.php');
require_once('./class/util/SaftyUtil.php');

if(!SaftyUtil::isValidToken($_POSt['token'])) {
    $_SESSION['msg']['err'] = Config::MSG_INVALID_PROCESS;
    header('Location: ./user_add.php');
    exit;
}

$_SESSION['login'] = $_POST;

try{
    $db = new Users();

    $ret = $db->addUser($_POST['email'],$_POST['password'],$_POST['name']);
    if(!$ret){
        $_SESSION['msg']['err'] = Config::MSG_USER_DUPLICATE;
        header('Location: ./user_add.php');
        exit;
    }

    unset($_SESSION['login']);
    unset($_SESSION['msg']['err']);
    header('Location: ./login.php');
    exit;
}catch(Exception $e){
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}