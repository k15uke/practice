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
        print '<table border="1">';
        print 'お選びになったメニューはこちらです';
        print '<table border=1>';
        foreach($_POST['menu'] as $key => $value){
            print '<tr><th>';
            print $value;
            print '</tr></th>';
        }
        
        print '</table>';

    ?>
</body>
</html>