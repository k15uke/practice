<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
</style>

<body>
    <table border="1">
        <tr>
            <th> </th>
            <?php
            for ($x = 0; $x < 10; $x++) {
                for ($y = 0; $y < 10; $y++) {
                    if ($x == 0 && $y == 0) {
                    } elseif ($x == 0) {
                        print '<th>' . $y . '</th>';
                    } elseif ($y == 0) {
                        print '<tr>';
                        print '<th>' . $x . '</th>';
                    } else {
                        $ans = $x * $y;
                        if($ans %2 ==0){
                            print '<td bgcolor="#cccccc">'.$ans;
                        }else{
                            print '<td>' . $ans  ;
                        }
                        print '</td>';
                        
                    }

                }                     
            }
            ?>
        </tr>
        <?php


        ?>

    </table>
</body>

</html>