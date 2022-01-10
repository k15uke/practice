<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lunch = array('Aランチ','Bランチ','Cランチ','唐揚げ定食','とんかつ定食'
        ,'エビフライ定食','オムライス','カレーライス','ごはん大','ごはん小','ビール','烏龍茶');
        print '<table border="1">';
        print '<tr>';
        print 'メニュー';
        foreach($lunch as $key => $value){
            print '<tr><td>'.$value.'</tr></td>';
        }
        print '</tr>';
        print '</table>';

    ?>
</body>
</html>