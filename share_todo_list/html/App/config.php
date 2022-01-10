<?php

define('DSN','mysql:dbname=todo;host=localhost;charset=utf8mb4');
define('DB_USER','root');
define('DB_PASS','');

session_start();
session_regenerate_id(true);

spl_autoload_register(function($class){
    $file = sprintf(__DIR__. '%s.php',$class);
    $file = str_replace('App/App','/App',$file);
    $file = str_replace('\\','/',$file);
    
    if(file_exists($file)){
        require($file);
    }else{
        echo 'File not found' . $file;
        exit;
    }
    
}