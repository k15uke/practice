<?php

session_start();
session_regenerate_id();

require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/Users.php');
require_once('./class/util/SaftyUtil.php');

if(!SaftyUtil::isValidToken($_POST['token'])){
    $_SESSION['msg']['err'] = Config::MSG_INVALID_PROCESS;
    header('Location: ./login.php');
    exit;
}

if(isset($_SESSION['login_failure']) && $_SESSION['login_failure'] >= 3){
    $_SESSION['msg']['err'] = Config::MSG_USER_LOGIN_TRY_TIMES_OVER;
    header('location: ./error.php');
    exit;
}

$_SESSION['login'] = $_POST;

try{
    $db = new Users();
    $user = $db->getUser($_POST['email'],$_POST['password']);

    if(empty($user)){
        if(isset($_SESSION['login_failure'])){
            $_SESSION['login_failure']++;
        }else {
            $_SESSION['login_failure'] = 1;
        }

        $_SESSION['msg']['err'] = Config::MSG_USER_LOGIN_FAILURE;
        header('Location: ./login.php');
        exit;
    }
    unset($_SESSION['login_failure']);

    $_SESSION['user'] = $user;

    unset($_SESSION['msg']['err']);
    header('Location: ./');
    exit;
}catch(Exception $e){
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}

