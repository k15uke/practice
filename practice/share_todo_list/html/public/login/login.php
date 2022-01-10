<?php

require_once('../../config.php');

use App\Util\Common;
use App\Model\Base;
use App\Model\Users;

$post = Common::sanitaize($_POST);


if(!isset($post['token']) || !Common::isValidToken($post['token']))
{  
    $_SESSION['msg']['error'] = '不正な処理が行われました。';
   header('Location: ./');
    exit;
}

try{
    $base = Base::getInstance();
    $db = new Users($base);
    $user = $db->getUser($post['user'],$post['password']);

    if(empty($user)){
        $_SESSION['msg']['error'] = "ユーザ名またはパスワードが違います。";
        $_SESSION['post']['user'] = $post['user'];

        header('Location: ./');
    }else{
        $_SESSION['user'] = $user;
        unset($_SESSION['msg']['error']);
        unset($_SESSION['post']);
        header('Location: ../todo/');
    }
}catch(Exception $e){
    header('Location: ../error/error.php');
    exit;
}
