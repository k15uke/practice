<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        $ramen = $_POST['ramen'];


        switch ($ramen) {
            case 1:
                print 'お客様が選ばれたのはラーメンですね';
                break;
            case 2:
                print 'お客様が選ばれたのはチャーシュー麺ですね';
                break;
            case 3:
                print 'お客様が選ばれたのはこってりラーメンですね';
                break;
            case 4:
                print 'お客様が選ばれたのは味玉ラーメンですね';
                break;
            case 5:
                print 'お客様が選ばれたのは味噌ラーメンですね';
                break;
            case 6:
                print 'お客様が選ばれたのは特製ラーメンですね';
                break;
        }
        ?>
    </div>
</body>

</html>