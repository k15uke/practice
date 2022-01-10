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
        $mikan=array('product_name'=>'みかん','production_area' => '愛媛県',
        'quality'=>'優','price'=>'3000');
        print '<table border="1">';
        foreach ($mikan as $key =>$value){
            print '<tr>';
            print '<th>'.$key.'</th>';
            print '<th>'.$value;'</th>';
            print '</tr>';
        }
    ?>
</body>
</html>