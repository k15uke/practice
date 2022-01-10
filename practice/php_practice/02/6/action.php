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
        <?php
        $a= $_POST['a'];
        $b = $_POST['b'];
        $c = $a / $b;
        print '数字A ÷ 数字Bは<br>';
        print $c;
        print 'です';
        ?>
    </div>
</body>

</html>