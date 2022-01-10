<?php


try{
    require_once('../common/common.php');
    $post=sanitize($_POST);
    $member_email = $_POST['email'];
    $member_pass = $_POST['pass'];

    $member_pass=md5($member_pass);

    $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT code,name FROM dat_member WHERE email=? AND password=?';
    $stmt= $dbh->prepare($sql);
    $data[]=$member_email;
    $data[]=$member_pass;
    $stmt->execute($data);

    $dbh=null;

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);

    if($rec==false){
        print 'メールアドレスかパスワードが間違っています。';
        print '<a href="member_login.html">戻る</a>';
    }else{
        session_start();
        $_SESSION['member_login']=1;
        $_SESSION['member_code']=$rec['code'];
        $_SESSION['member_name']=$rec['name'];
        header('Location:shop_list.php');
        exit();
    }

}catch (Exception $e){
    print 'ただいま障害により大変ご迷惑をかけております。';
    exit();
}

