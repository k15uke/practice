<?php
session_start();
session_regenerate_id();

if (isset($_SESSION['count']) && isset($_GET['reset'])) {
    unset($_SESSION['count']);
}

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
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

    <?= $_SESSION['count'] ?>
    </p>
    <a href="./" class="btn btn-primary">カウント</a>
    <a href="./?reset" class="btn btn-outline-primary">リセット</a>
    </div>
    </div>
    </div>
    <div class="cols-md-4"></div>
    </div>
    </div>

</body>

</html>


</body>

</html>