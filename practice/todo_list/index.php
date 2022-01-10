<?php

$dsn = 'mysql:dbname=todo_list;host=localhost;charset=utf8';
$dbh = new PDO($dsn, 'root', '');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'select * from todo_items where is_deleted=0';

$stmt = $dbh->prepare($sql);

$stmt->execute();
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <h1>TODOリスト</h1>
    <form action="add.php" method="post">
        <input type="date" name="expiration_date" value="2020-01-07">
        <input type="text" name="todo_item" value="" class="item">
        <input type="submit" value="追加">
    </form>
    <table class="list">
        <tr>
            <th>期限日</th>
            <th>項目</th>
            <th>未完了</th>
            <th>完了</th>
            <th>削除</th>
            <th></th>
        </tr>

        <?php foreach ($list as $v) : ?>
            <tr>
                <form action="action.php" method="post">
                    <input type="hidden" name="id" value="<?= $v['id'] ?>">
                    <?php if ($v['is_completed'] == 1) : ?>
                        <td class="del"><?= $v['expiration_date'] ?></td>
                        <td class="del"><?= $v['todo_item'] ?></td>
                        <td class="center"><input type="radio" name="is_completed" value="0" <?php if($v['is_completed'] == 0) echo 'checked' ?>></td>
                        <td class="center"><input type="radio" name="is_completed" value="1" <?php if($v['is_completed'] == 1) echo 'checked' ?>></td>
                        <td class="center"><input type="checkbox" name="is_deleted"></td>
                        <td><input type="submit" value="実行"></td>
                </form>
            </tr>
        <?php else : ?>
            <tr>
                <form action="action.php" method="post">
                    <input type="hidden" name="id" value="<?= $v['id'] ?>">
                    <td><?= $v['expiration_date'] ?></td>
                    <td><?= $v['todo_item'] ?></td>
                    <td class="center"><input type="radio" name="is_completed" value="0" <?php if($v['is_completed'] == 0) echo 'checked' ?>></td>
                    <td class="center"><input type="radio" name="is_completed" value="1" <?php if($v['is_completed'] == 1) echo 'checked' ?>></td>
                    <td class="center"><input type="checkbox" name="is_deleted"></td>
                    <td><input type="submit" value="実行"></td>
                </form>
            </tr>
        <?php endif ?>
    <?php endforeach ?>

    </table>
    </div>
</body>

</html>