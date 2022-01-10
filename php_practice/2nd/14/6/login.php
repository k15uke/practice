<?php
session_start();
session_regenerate_id();

require_once('./class/config/Config.php');
require_once('./class/util/SaftyUtil.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">ログイン</div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['msg']['err'])) : ?>
                            <?= $_SESSION['msg']['err'] ?>
                    </div>
                <?php endif ?>
                <form action="./login_action.php" method="post">
                    <input type="hidden" name="token" value="<?= SaftyUtil::generateToken() ?>">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" value="<?php if (isset($_SESSION['login']['email'])) echo $_SESSION['login']['email'] ?>" class="form-control" id="emal">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ログイン" class="btn btn-primary">
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