<?php

session_start();
session_regenerate_id();

if(isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}

try{
    if(!isDate($_POST['date'])){
        throw new Exception('日付の形式が正しくありません');
    }
}catch (Exception $e){
    $_SESSION['error']['msg'] = $e->getMessage();
    $_SESSION['error']['date'] = $_POST['date'];
    header('Location: ./');
    exit;
}

function isDate($str){
    $d = explode('/' , $str);
    return checkdate($d[1],$d[2],$d[0]);
}
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
                    <div class="card-header">判定結果</div>
                    <div class="card-body">
                        正しい日付です。
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>