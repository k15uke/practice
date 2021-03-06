<?php

require_once('../../App/config.php');

use App\Util\Common;
use App\Model\Base;
use App\Model\TodoItems;

if (empty($_SESSION['user'])) {
    header('Location: ../login/');
} else {
    $user = $_SESSION['user'];
}

$get = Common::sanitaize($_GET);

if (empty($get['item_id'])) {
    $item_id = $_SESSION['post']['item_id'];
} else {
    $item_id = $get['item_id'];
}

try {
    $base = Base::getInstance();
    $db = new TodoItems($base);
    $item = $db->getTodoItemById($item_id);
} catch (Exception $e) {
    header('Location: ../error/error.php');
    exit;
}

$token = Common::generateToken();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navber-expand-md navbar-dark bg-primary">
        <span class="navbar-brand">TODOリスト</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="$navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapls navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./">作業一覧</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./entry.php">作業登録<span class="sr-only">(current)</span></a>
                </li>
                <li ckass="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" area-haspopup="true" area-expanded="false">
                        <?= $user['family_name'] . $user['first_name'] ?>さん
                    </a>
                    <div class="dropdown-menu" area-labelledby="navbarDropDown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../login/logout.php">ログアウト</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action-"./" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" value="">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">検索</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row my-2 justify-content-center">
            <div class="col-sm-6">
                <form action="./delete_action.php" method="post">
                    <input type="hidden" name="token" value="<?= $token ?>">
                    <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                    <div class="form-group">
                        <label for="item_name">項目名</label>
                        <p name="item_name" id="item_name" class="form-control"><?= $item['item_name'] ?></p>
                    </div>
                    <div class="form-group">
                        <label for="user_id">担当者</label>
                        <p name="user_id" id="user_id" class="form-control"><?= $user['family_name'].$user['first_name'] ?></p>
                    </div>
                    <div class="form-group">
                        <label for="expire_date">期限</label>
                        <p class="form-control" id="expire_date" name="expire_date"><?= $item['expire_date'] ?>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="finished" name="finished" value="1" <?php if(!is_null($item['finished_date'])) echo " checked" ?> disabled>
                         <label for="finished">完了</label>
                    </div>
                    <input type="submit" value="削除" class="btn btn-danger">
                    <input type="button" value="キャンセル" class="btn btn-outline-primary" onclick="location.href='./';">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>