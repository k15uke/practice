<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print '<tr>';
        for($x=0; $x < 10; $x++){
            for($y=0; $y<10; $y++){
                if($x == 0 && $y ==0){
                    print '<th></th>';
                }elseif($x == 0){
                    print '<th>'.$y.'</th>';
                }elseif($y == 0){
                    print '<tr>';

                    print '<th>'.$x.'</th>';
                }
                $z = $x * $y;
                if($z % 2 ==0){
                    print '<th color=#999999></th>';
                }
                print '<td>'.$z.'</td>';
            }
        }

        ?>
        </tr>
</body>
</html>