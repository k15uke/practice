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
            print '<ul>';
            for($i=1; $i <=$kaisu; $i++){
                if($i%2==1){
                    continue;
                }
                print'<li>'. $i .'回目</li>';
            }   

        }elseif($kaisu == 10){
            print $kaisu.'回ループします<br>';
            print '<ul>';
            for($i=1; $i <=$kaisu; $i++){
                if($i%2==1){
                    continue;
                }
                print'<li>'. $i .'回目</li>';
            }
        }elseif($kaisu == 15){
            print $kaisu.'回ループします<br>';
            print '<ul>';
            for($i=1; $i <=$kaisu; $i++){
                if($i%2==1){
                    continue;
                }
                print'<li>'. $i .'回目</li>';
            }   
        }elseif($kaisu == 20){
            print $kaisu.'回ループします<br>';
            print '<ul>';
            for($i=1; $i <=$kaisu; $i++){
                if($i%2==1){
                    continue;
                }
                print'<li>'. $i .'回目</li>';
            }   
        }elseif($kaisu == 25){
            print $kaisu.'回ループします<br>';
            print '<ul>';
            for($i=1; $i <=$kaisu; $i++){
                if($i%2==1){
                    continue;
                }
                print'<li>'. $i .'回目</li>';
            }
        }   
        print '</ul>';
                ?>
    </div>
</body>

</html>