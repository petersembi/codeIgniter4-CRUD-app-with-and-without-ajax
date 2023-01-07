<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to product page</h2>

    <h4>Product name : <?= $name; ?></h4>

    <h3>Product List</h3>

    <ul>
        <?php foreach($prod_list as $item) : ?>
            <li><?= $item; ?></li>
        <?php endforeach; ?>
    </ul>


</body>

</html>