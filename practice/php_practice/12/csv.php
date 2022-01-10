<?php
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try{
    $db = new TodoItems();
    $list = $db->selectAll();
}catch(Exception $e){
    var_dump($e);
    exit;
}

$fp = fopen('./work.csv','w');
$b = true;

foreach ($list as $val){
    foreach($val as $k => $v){
        if($k == 'todo_item'){
            $val[$k] = mb_convert_encoding($v,'SJIS-win','UTF-8');
        }
    }
    if(fputcsv($fp,$val,',','"') === false){
        $b = false;
        break;
    }
}

if($b){
    $msg = '書き込みが完了しました。';
}else{
    $msg = '書き込みに失敗しました。';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p><?= $msg ?></p>
                        <a href="./">戻る</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
</body>
</html>