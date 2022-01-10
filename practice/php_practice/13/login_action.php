<?php

session_start();
session_regenerate_id();

require_once('./class/db/Base.php');
require_once('./class/db/Users.php');

$_SESSION['login'] = $_POST;

try{
    $db = new Users();
    $user = $db->getUser($_POST['email'], $_POST['password']);

    if(empty($user)){
        $_SESSION['err_msg'] = 'メールアドレス、または、パスワードに誤りがあります';
        header('Location: ./login.php');
        exit;
    }

    $_SESSION['user'] = $user;

    unset($_SESSION['err_msg']);
    header('Location: ./');
    exit;
}catch (Exception $e){
    $_SESSION['err_msg'] = '申し訳ございません。エラーが発生しました。';
    header('Location: ./login.php');
    exit;
}

?>
