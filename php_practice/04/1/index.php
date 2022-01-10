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
    print '果物のリスト';
        $fruits = array('みかん','りんご','メロン','バナナ','パイナップル');
        print '<ul>';
        for($i=0; $i<count($fruits); $i++){
            print '<li>'.$fruits[$i].'</li>';
        }
        print '</ul>';
    ?>
</body>

</html>