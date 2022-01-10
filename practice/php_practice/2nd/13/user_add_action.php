<?php

require_once('./class/db/Base.php');
require_once('./class/db/Users.php');

session_start();
session_regenerate_id();

$_SESSION['login'] = $_POST;

try{
    $db = new Users();

    $ret = $db->addUser($_POST['email'],$_POST['password'],$_POST['name']);
    if(!$ret){
        $_SESSION['err_msg'] = 'すでに同じメールアドレスが登録されています。';
        header('Location: ./user_add.php');
        exit;
    }

    unset($_SESSION['login']);
    unset($_SESSION['err_msg']);
    header('Location: ./login.php');
    exit;
}catch (Exception $e){
    $_SESSION['err_msg'] = 'エラー';
    var_dump($e);
    header('Location: ./user_add.php');
    exit;
}