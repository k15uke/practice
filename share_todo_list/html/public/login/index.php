<?php

require_once('../../App/config.php');

use App\Util\Common;

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
    <nav class="navbar navbar-expand-md navber-dark bg-primary">
        <span class="navbar-brand">TODOリスト</span>
    </nav>
    <div class="container">
        <div class="row my-2">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <h1></h1>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <?php if (!empty($_SESSION['msg']['error'])) : ?>
            <div class="row my-2">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 alert alert-danger alert-dismissble fade show">
                    <?= $_SESSION['msg']['error'] ?>
                    <button class="close" data-dismiss="alert">&times;</button>
                </div>
                <div class="col-sm-3"></div>
            </div>
            <div class="col-sm-3"></div>
    </div>
<?php endif ?>

<div class="row my-2 justify-content-center">
    <div class="col-sm-6">
        <form action="./login.php" method="post">
            <input type="hidden" method="post">
            <div class="form-group">
                <label for="user">ユーザー名</label>
                <input type="text" class="form-control" id="user" name="user" value="<?= isset($_SESSION['post']['user']) ? $_SESSION['post']['user'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">ログイン</button>
        </form>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>