<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $total = $_GET["single_price"] * $_GET["quantity"];

    if($total > 1000) {
        $total *= 0.7;
    } elseif($total > 500) {
        $total *= 0.9;
    }

    echo $total;
    ?>
</body>
</html>