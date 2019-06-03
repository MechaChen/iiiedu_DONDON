<?php
$number = $_GET["number"];
$total = 0;
$oddTotal = 0;
$evenTotal = 0;

for($i=1; $i<=$number; $i++) {
    $total += $i;
}

for($i=1; $i<=$number; $i++) {
    $oddTotal += ($i % 2 == 1) ? $i : 0;
}

for($i=1; $i<=$number; $i++) {
    $evenTotal += ($i % 2 == 0) ? $i : 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <style>
        .card {
            width: 300px;
            margin: 50px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">計算結果</h2>
            <p class="card-text">輸入的正整數：<?php echo $number ?></p>
            <p class="card-text">總和：<?php echo $total ?></p>
            <p class="card-text">奇數總和：<?php echo $oddTotal ?></p>
            <p class="card-text">偶數總和：<?php echo $evenTotal ?></p>
        </div>
    </div>
</body>
</html>