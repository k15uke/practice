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
        $family_name = $_POST['family_name'];
        $last_name = $_POST['last_name'];
        print 'あなたのお名前は'.$family_name.' '.$last_name.'さんですね？'
        ?>
    </div>
</body>

</html>