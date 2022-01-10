<?php

require_once('../../config.php');

use App\Util\Common;
use App\Model\Base;
use App\Model\TodoItems;

unset($_SESSION['post']);
unset($_SESSION['msg']['error']);

if (empty($_SESSION['user'])) {
    header('Location: ../login/');
} else {
    $user = $_SESSION['user'];
}

try {
    $isSearch = false;

    $base = Base::getInstance();
    $db = new TodoItems($base);

    $search = "";

    if (isset($_GET['search'])) {
        $get = Common::sanitaize($_GET);
        $search = $get['search'];
        $isSearch = true;
        $items = $db->getTodoItemBySearch($search);
    } else {
        $items = $db->getTodoItemAll();
    }
} catch (Exception $e) {
    header('Location: ../error/error.php');
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
    <style>
        form {
            display: inline-block;
        }

        tr.del>td {
            text-decoration: line-through;
        }

        tr.del>td.button {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <span class="navbar-brand">TODOリスト</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./">作業一覧 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./entry.php">作業登録</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $user['family_name'] . $user['first_name'] ?>　さん
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../login/logout.php">ログアウト</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="./" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" value="<?= $search ?>">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">検索</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <table class="table table-striped table-hover table-sm my-2">
            <thead>
                <tr>
                    <th scope="col">項目名</th>
                    <th scope="col">担当者</th>
                    <th scope="col">登録日</th>
                    <th scope="col">期限日</th>
                    <th scope="col">完了日</th>
                    <th scope="col">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items as $item) {
                    if ($item['expire_date'] < date('Y-m-d') && is_null($item['finished_date'])) {
                        $class = 'class="text-danger"';
                    } elseif (!is_null($item['finished_date'])) {
                        $class = 'class="del"';
                    } else {
                        $class = '';
                    }
                ?>
                    <tr <?= $class ?>>
                        <td class="align-middle">
                            <?= $item['item_name'] ?>
                        </td>
                        <td class="align-middle">
                            <?= $item['family_name'] . $item['first_name'] ?>
                        </td>
                        <td class="align-middle">
                            <?= $item['registration_date'] ?>
                        </td>
                        <td class="align-middle">
                            <?= $item['expire_date'] ?>
                        </td>
                        <td class="align-middle">
                            <?= $item['expire_date'] ?>
                        </td>
                        <td class="align-middle">
                            <?php
                            if (empty($item['finished_date'])) {
                                echo '未';
                            } else {
                                echo $item['finished_date'];
                            }
                            ?>
                        </td>
                        <td class="align-middle button">
                            <form action="./complete_action.php" method="post" class="my-sm-1">
                                <input type="hidden" name="token" value="<?= $token ?>">
                                <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                                <button class="btn btn-primary my-0" type="submit">完了</button>
                            </form>
                            <a href="./edit.php?item_id=<?= $item['id'] ?>" class="btn btn-success my-0">修正</a>
                            <a href="./delete.php?item_id=<?= $item['id'] ?>" class="btn btn-danger my-0">削除</a>
                        </td>
                        </tr>
                    <?php
                }
                    ?>
            </tbody>
        </table>
        <?php if ($isSearch) : ?>
            <div class="row">
                <div class="col">
                    <form>
                        <div class="goback">
                            <input class="btn btn-primary my-0" type="button" value="戻る" onclick="location.href='./';">
                        </div>
                    </form>
                </div>
            </div>
        <?php endif ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>