<?php

require_once('../../App/config.php');

use App\Util\Common;
use App\Util\Validation;
use App\Model\Base;
use App\Model\TodoItems;

unset($_SESSION['msg']['error']);

if(empty($_SESSION['user'])){
    header('Location: ../login/');
}else {
    $user = $_SESSION['user'];
}

$post = Common::sanitaize($_POST);

$url = './edit.php?item_id=' . $post['id'];

if(!isset($post['token']) || !Common::isValidToken($post['token'])){
    $_SESSION['msg']['error'] = '不正な処理が行われました' ;
    header("Location: ${url}");
    exit;
}

$_SESSION['post'] = $post;
$_SESSION['post']['finished'] = !empty($post['finished']) ? $post['finished'] : null;

if($post['item_name'] == '' ){
    $_SESSION['msg']['error'] = "項目銘を入力してください。";
    header("Location: ${url}");
    exit;
}

$_SESSION['post'] = $post;
$_SESSION['post']['finished'] = !empty($post['finished']) ? $post['finished'] : null;

if($post['item_name'] == ''){
    $_SESSION['msg']['error'] = "項目名を入力してください。";
    header("Location: ${url}");
    exit;
}

if(!Validation::isValidItemName($post['item_name'])){
    $_SESSION['msg']['error'] = '項目名は100文字以下にしてください。';
    header("Location: ${url}");
    exit;
}

if(empty($post['user_id'])){
    $_SESSION['msg']['error'] = "担当者を選択してください";
    header('Location ${url}');
    exit;
}

if(!Validation::isValidUserId($post['user_id'])){
    $_SESSION['msg']['error'] = '指定の担当者は存在しません';
    header("Location: ${url}");
    exit;
}

if(!Validation::isDate($post['expire_date'])){
    $_SESSION['msg']['error'] = "期限日の日付が正しくありません。";
    header("Location ${url}");
    exit;
}

if(!empty($post['finished']) && $post['finished'] != 1){
    $_SESSION['msg']['error'] = "完了チェックボックスの値が正しくありません";
    header('Location: ${url}');
    exit;
}
