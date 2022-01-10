<?php

require_once('../../App/config.php');

use App\Util\Common;
use App\Model\Base;
use App\Model\TodoItems;

unset($_SESSION['msg']['error']);

if(empty($_SESSION['user'])){
    header('location: ../login/');
}else {
    $user = $_SESSION['user'];
}

$post = Common::sanitaize($_POST);

if(!isset($post['token']) || Common::isValidToken($post['token']){
    $_SESSION['msg']['error'] = '不正な処理が行われました。';
    header('Location: ./delete.php?item_id='.$post['item_id']);
    exit;
}

try{
    $base = Base::getInstance();
    $db = new TodoItems($base);
    $db->deleteTodoItemById($post['item_id']);

    unset($_SESSION['post']);

    header('Location: ./');
    exit;
}catch(Exception $e){
    header('Location: ../error/error.php');
    exit;
}