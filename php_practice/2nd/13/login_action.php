<?php

session_start();
session_regenerate_id();

require_once('./class/db/Base.php');
require_once('./class/db/Users.php');

$_SESSION['logon'] = $_POST;

try{
    $db = new Users();
    $user = $db->getUser($_POST['email'],$_POST['password']);

    if(empty($user)){
        $_SESSION['err_msg'] = 'メールアドレス、またはパスワードに誤りがあります。';
        header('Location: ./login.php');
        exit;
    }

    $_SESSION['user'] = $user;
    header('Location: ./');
    exit;
}catch (Exception $e){
    var_dump($e);
    $_SESSION['err_msg'] = 'エラー';
    echo $e;
    header('Location: ./login.php');
    exit;
}