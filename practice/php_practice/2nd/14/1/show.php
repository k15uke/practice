<?php

$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';

$dbh = new PDO($dsn, 'root', '');

$sql = "select * from todo_items ";
$sql .= "where expiration_date='" . $_POST['date'] . "'";

$stmt = $dbh->prepare($sql);
$stmt->execute();

$lists = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <tr>
                                <th>期限日</th>
                                <th>TODO項目
                            </tr>
                            </tr>
                            <?php foreach ($lists as $list) : ?>
                                <tr>
                                    <td><?= $list['expiration_date'] ?></td>
                                    <td><?= $list['todo_item'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <?php var_dump($sql); ?>
</body>

</html>