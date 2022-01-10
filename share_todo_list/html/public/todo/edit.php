<?php
require_once('../../App/config.php');

use App\Util\Common;
use App\Model\Base;
use App\Model\TodoItems;
use App\Model\Users;

if (empty($_SESSION['user'])) {
    header('Location: ../login/');
} else {
    $user = $_SESSION['user'];
}

$get = Common::sanitaize($_GET);

try {
    $base = Base::getInstance();
    $db = new Users($base);
    $users = $db->getUserAll();

    $db = new TodoItems($base);
    $item = $db->getTodoItemById($get['item_id']);
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
</head>

<body>
    <div class="row my-2 justifi-content-center">
        <div class="col-sm-6">
            <form action="./edit_action.php" method="post">
                <input type="hidden" name="token" value="<?= $token ?>">
                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                <div class="form-group">
                    <label for="item_name">項目名</label>
                    <input type="text" name="item_name" id="item_name" class="form-control" value="<?= isset($_SESSION['post']['item_name']) ? $_SESSION['post']['item_name'] : $item['item_name'] ?>">
                </div>
                <div class="form-group">
                    <label for="user_id">担当者</label>
                    <select name="user_id" id="user_id" class="form-control">
                        <option value="">--選択してください--</option>
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id'] ?>" <?= $item['user_id'] == $user['id'] ? 'selected' : '' ?>><?= $user['family_name'] . $user['first_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="expire_date">期限</label>
                    <input type="date" class="form-control" id="expire_date" name="expire_date" value="<?= isset($_SESSION['post']['expire_date']) ? $_SESSION['post']['expire_date'] : $item['expire_date'] ?>">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="finished" name="finished" value="1" <?= isset($_SESSION['post']['finished']) || !is_null($item['finished_date']) ? 'checked' : '' ?>>
                    <label for="finished">完了</label>
                </div>
                <input type="submit" value="更新" class="btn btn-primary">
                <input type="button" value="キャンセル" class="btn btn-outline-primary" onclick="location.href='./';">
            </form>
        </div>
    </div>
    </div>
</body>

</html>