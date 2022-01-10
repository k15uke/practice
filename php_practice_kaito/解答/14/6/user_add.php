５<?php
// セッションを開始する
session_start();
session_regenerate_id();

// 必要なファイルを読み込む
require_once('./class/config/Config.php');
require_once('./class/util/SaftyUtil.php');
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題14-6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">新規ユーザー登録</div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['msg']['err'] )) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['msg']['err']  ?>
                            </div>
                        <?php endif ?>
                        <form action="./user_add_action.php" method="post">
                        <input type="hidden" name="token" value="<?= SaftyUtil::generateToken() ?>">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" name="email" value="<?php if (isset($_SESSION['login']['email'])) echo $_SESSION['login']['email'] ?>" class="form-control" id="emal">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="name">お名前</label>
                                <input type="text" name="name" value="<?php if(isset($_SESSION['login']['name'])) echo $_SESSION['login']['name'] ?>" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="登録" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>