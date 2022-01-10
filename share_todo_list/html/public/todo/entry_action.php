<?php

require_once('../../App/config.php');

use App\Util\Common;
use App\Util\Validation;
use App\Model\Base;
use App\Model\TodoItems;

unset($_SESSION['msg']['error']);

if(empty($_SESSION['user'])){
    header('Location: ../login/');
}else{
    $user = $_SESSION['user'];
}

$post =Common::sanitaize($_POST);

$url = './entry.p'