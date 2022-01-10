<?php

session_start();
session_regenerate_id();

if (empty($_SESSION['user'])) {
    header('Location: ./login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            CSVファイルのアップロード
                        </div>
                        <div class="card-body">
                            <?php if (isset($_SESSION['err']['msg'])) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <div class="alert alert-danger" role="alert">
                                        <?= $_SESSION['err']['msg'] ?>
                                    </div>
                                <?php endif ?>
                                <form method="post" action="./update.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="csv_file">CSVファイルを選択してください。</label>
                                        <input type="file" name ="csv_file" id="csv_file" class="form-control-file">
                            </div>
                            <input type="submit" value="送信" class="btn btn-primary">
                                </form>
                                </div>
                                <div class="card-footer">
                                    <a href="./">←戻る</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>