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
        $num = $_POST['num'];

        if($num >=100){
            print '100以上です';
        }else{
            print '100未満です';
        }
        ?>
    </div>
</body>

</html>