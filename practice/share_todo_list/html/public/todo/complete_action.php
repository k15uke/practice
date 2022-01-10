<?php

require_once('../../config.php');

use App\Util\Common;
use App\Model\Base;
use App\Model\TodoItems;

if(empty($_SESSION['user'])){
    header('Location: ../login/');
}else{
    $user = $_SESSION['user'];
}

$post = Common::sanitaize($_POST);

if(!isset($post['token']) || !Common::isValidToken($post['token'])){
    $_SESSION['msg']['err'] = '不正な処理が行われました。';
    header('Location: ./');
    exit;
}

try{
    $base = Base::getInstance();
    $db = new TodoItems($base);
    $db->makeTodoItemComplete($post['item_id']);
    header('Location: ./');
}catch (Exception $e){
    header('Location: ../error/error.php');
    exit;
}