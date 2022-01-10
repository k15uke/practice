<?php
session_start();
session_regenerate_id();

$msg = 'アップロードに失敗しました。';

$path = __DIR__ . '/images/';

if(!isset($_FILES['image_file']) || $_FILES['image_file']['error'] > 0){
    $_SESSION['err']['msg'] = $msg;
    header('Location: ./');
    exit;
}

if(!move_uploaded_file($_FILES['image_file']['tmp_file'],$path.$_FILES['image_file']['name'])) {
    $_SESSION['err']['msg'] = $msg;
    header('Location: ./');
    exit;
}

header('Location: ./show.php');
exit;