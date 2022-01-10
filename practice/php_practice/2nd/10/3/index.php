<?php

session_start();
session_regenerate_id();
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
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        画像のアップロード
                    </div>
                    <div class="card-body">
                        <?php if(isset($_SESSION['err']['msg'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                画像のアップロードに失敗しました。
                            </div>
                            <?php endif ?>
                            <form method="post" action="./action.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="image_file">画像ファイルを選択してください</label>
                                    <input type="file" name="image_file" id="image_file" class="form-control-file">
                                </div>
                                <input type="submit" value="送信" class="btn btn-primary">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>