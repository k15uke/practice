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
        $score = $_POST['score'];

        if($score >= 100){
            print '満点です！';
        }elseif($score >=80 && $score<100){
            print '優秀です';
        }elseif($score >=70 && $score<80){
            print 'まずまずです。';
        }elseif($score >=60 && $score<70){
            print '合格です。';
        }else{
            print '残念でした、次回頑張りましょう';
        }
        ?>
    </div>
</body>

</html>