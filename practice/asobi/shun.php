<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ろくまる農園</title>
</head>
<body>
    <?php

    $tsuki=$_POST['tsuki'];

    $yasai[]= "";
    $yasai[]= "ブロッコリー";
    $yasai[]= "カリフラワー";
    $yasai[]= "レタス";
    $yasai[]= "みつば";
    $yasai[]= "アスパラガス";
    $yasai[]= "セロリ";
    $yasai[]= "ナス";
    $yasai[]= "ピーマン";
    $yasai[]= "オクラ";
    $yasai[]= "大根";
    $yasai[]= "ほうれんそう";

    print $tsuki;
    print '月は';
    print $yasai[$tsuki];
    print 'が旬です';


    ?>
</body>
</html>