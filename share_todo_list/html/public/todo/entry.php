<?php

require_once('../../App/Config.php');

use App\Util\Common;
use App\Model\Base;
use App\Model\Users;

if (empty($_SESSION['user'])) {
    header('Location: ../login/');
} else {
    $user = $_SESSION['user'];
}

$base = Base::getInstance();
$db = new Users($base);
$users = $db->getUserAll();

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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarSupportedContent" aria-control="navbarSupportedContent" aria-expanded="false" area-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./">作業一覧</a>
                </li>
                <li ckass="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" area-haspopup="true" area-expanded="false">
                        <?= $user['family_name'] . $user['first_name'] ?> さん
                    </a>
                    <div class="dropdown-menu" aria-labblledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../login/logout.php">ログアウト</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="./" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" area-label="Search" name="search" value="">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">検索</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row my-2 justify-content-center">
            <div class="col-sm-6 alert alert-info">
                作業を登録してください
            </div>
        </div>
        <?php if (!empty($_SESSION['msg']['error'])) : ?>
            <div class="row my-2 justify-content-center">
                <div class="col-sm-6 alert alert-danger alert-dismiss fade show">
                    <?= $_SESSION['msg']['error'] ?>
                    <button class="close" data-dismiss="alert">&times;</button>
                </div>
            </div>
    </div>
<?php endif ?>
<div class="row my-2 justify-content-center">
    <div class="col-sm-6">
        <form action="./entry_action.php" method="post">
            <input type="hidden" name="token" value="<?= $token ?>">
            <div class="form-group">
                <label for="item_name">項目名</label>
                <input type="text" class="form-control" id="item_name" name="item_name" value="<?= isset($_SESSION['post']['item_name']) ? $_SESSION['post']['item_name'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="user_id">担当者</label>
                <select name="user_id" id="user_id" class="form-control">
                    <option value="">--選択してください--</option>
                    <?php foreach ($user as $user) : ?>
                        <option value="<?= $user['id'] ?>" <?= isset($_SESSION['post']['user_id']) && $_SESSION['post']['user_id'] == $user['id'] ? 'selected' : '' ?>><?= $user['family_name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="expire_date">期限</label>
                <input type="date" class="form-control" id="expire_date" name="expire_date" value="<?= isset($_SESSION['post']['expire_date']) ? $_SESSION['post']['expire_date'] : '' ?>">
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="finished" name="finished" value="1" <?= isset($_SESSION['post']['finished']) ? 'checked' : '' ?>>
                <label for="finished">完了</label>
            </div>
            
            <input type="submit" value="登録" class="btn btn-primary">
            <a href="./" class="btn btn-outline-primary">キャンセル</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>