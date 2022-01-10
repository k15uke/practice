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
        $id = $_GET['id'];
        $name = $_GET['name'];
        print 'ID:' . $id;
        print 'name' . $name;
        ?>
    </div>
</body>

</html>