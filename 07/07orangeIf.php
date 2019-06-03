<?php
    $level = $_GET["level"];
    $quantity = $_GET["quantity"];
    $price = 0;
    $total = 0;


    if($level == 1) {
        if($quantity > 100) {
            $price = 20;
        } elseif($quantity > 40) {
            $price = 25;
        } else {
            $price = 30;
        }
    } elseif ($level == 2) {
        if($quantity > 100) {
            $price = 15;
        } elseif($quantity > 40) {
            $price = 20;
        } else {
            $price = 25;
        }
    } elseif ($level == 3) {
        if($quantity > 100) {
            $price = 10;
        } elseif($quantity > 40) {
            $price = 15;
        } else {
            $price = 20;
        }
    }

    $total = $price * $quantity;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .card {
        margin-top: 50px;
        width: 370px;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="orangeShop.jpg" alt="Don Don's Orange Shop">
            <div class="card-body">
                <h2 class="card-title">董董的橘子店</h2>
                <p class="card-text">等級：<?php echo $level ?></p>
                <p class="card-text">數量：<?php echo $quantity ?> kg</p>
                <p class="card-text">單價：<?php echo $price ?> 元</p>
                <p class="card-text">總共：<?php echo $total ?> 元</p>
                <h4>感謝您的光臨！</h4>
            </div>
        </div>
    </div>
</body>
</html>