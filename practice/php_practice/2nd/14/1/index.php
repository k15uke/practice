<?php

session_start();
session_regenerate_id();

$dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$data = $dt->format('Y-m-d');

$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';

$dbh= new PDO($dsn,'root','');

$sql = 'select * from todo_items order by expiration_date';

$stmt = $dbh->prepare($sql);
$stmt->execute();

$list = $stmt->fetchAll();

$token = bin2hex(openssl_random_pseudo_bytes(32));
$_SESSION['token'] = $token;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        #expiration_date{
            width: 12rem;
        }
        
        #todo_item{
            width:25rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">TODOリスト</div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['err_msg'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['err_msg'] ?>
                            </div>
                            <?php endif ?>
                            <form action="./add.php" method="post" class="form-inline">
                                <input type="hidden" name="token" value="<?= $token ?>">
                                <div class="form-group mb-3 mr-1">
                                    <label for="expiration_date" class="sr-only">期限日</label>
                                    <input type="date" name="expiration_date" value="<?= $date ?>" id="expiration_date" class="form-control" >
                                </div>
                                <div class="form-group mb-3 mr-1">
                                    <label for="todo_item" class="sr-only">TODO項目</label>
                                    <input type="text" name="todo_item" placeholder="TODO項目を入力してください" id="todo_item" class="form-control">
                                </div>
                                <input type="submit" value="追加" class="btn btn-primary mb-3">
                            </form>
                            <?php if(count($list) > 0) :?>
                                <table class="table table-borderd">
                                    <tr>
                                        <th>期限日</th>
                                        <th>TODO項目</th>
                                    </tr>
                                    <?php foreach ($list as $v) :?>
                                        <tr>
                                            <td><?= $v['expiration_date'] ?></td>
                                            <td><?= $v['todo_item'] ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </table>
                                <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>