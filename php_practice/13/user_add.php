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
</head>
<body>
    <div class="container">
        <div class="row-my-3">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <?php if (isset($_SESSION['err_msg'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['err_msg'] ?>
                            </div>
                            <?php endif ?>
                            <form action="./user_add_action.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="text" name="email" value="<?php if (isset($_SESSION['login']['email'])) echo $_SESSION['login']['email'] ?>" class="form-control" id="email">
                                 </div>
                                 <div class="form-group">
                                     <label for="password">Password</label>
                                     <input type="text" name="name" value="<?php if(isset($_SESSION['login']['name'])) echo $_SESSION['login']['name'] ?>">
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