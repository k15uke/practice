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
        $kaisu = $_POST['kaisu'];
        $i = 0;

        if($kaisu == 5){
            print $kaisu.'回ループします<br>';
            while($i < $kaisu){
                $i++;
                print '<ul>';
                print'<li>'. $i .'回目</li><br>';
            }   
        }elseif($kaisu == 10){
            print $kaisu.'回ループします<br>';
            while($i < $kaisu){
                $i++;
                print'<li>'. $i .'回目</li><br>';
            }   
        }elseif($kaisu == 15){
            print $kaisu.'回ループします<br>';
            while($i < $kaisu){
                $i++;
                print'<li>'. $i .'回目</li><br>';
            }
        }elseif($kaisu == 20){
            print $kaisu.'回ループします<br>';
            while($i < $kaisu){
                $i++;
                print'<li>'. $i .'回目</li><br>';
            }   
        }elseif($kaisu == 25){
            print $kaisu.'回ループします<br>';
            while($i < $kaisu){
                $i++;
                print'<li>'. $i .'回目</li><br>';
            }   
        }
        print '</ul>';
                ?>
    </div>
</body>

</html>