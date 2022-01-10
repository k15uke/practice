<?php
session_start();
session_regenerate_id();

$str='';
if(isset($_SESSION['str'])){
    $str = $_SESSION['str'];
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
    <form action=./action.php method="post">
        <label for="str">何か入力してください・・・</label>
        <input type="text" name="str" value="<?= $str ?>" id="str" class="form-control">
        <input type="submit" value="送信" class="btn btn-primary">
</form>
</body>
</html>