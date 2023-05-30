<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цена</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <?php
        $price = file_get_contents('price.txt');
    ?>
    <p>Сумма Вашего заказа равна <?php echo $price; ?>  рублей </p>
</body>
</html>