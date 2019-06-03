<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Righteous"
      rel="stylesheet"
    />
    <style>
    body {
      font-family: "Righteous", serif;
      text-align: center;
      margin-top: 50px;
    }
    span {
      display: inline-block;
      width: 40px;
      height: 40px;
      padding: 10px;
      margin: 0 10px 20px;
      box-sizing: border-box;
      background: radial-gradient(circle at 15px 15px, #ff6803 10%, #2f2f2f);
      border-radius: 50%;
      text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.3);
    }
    .prize {
      font-size: 30px;
      background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
      padding: 30px 0;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        $total = 0;
        $i = 0;
        do {
            $randomNumber = rand(0, 10);
            $total += $randomNumber;
            echo "<span>{$randomNumber}</span>";
            // go forward with another Loop
            $i++;
        } while($randomNumber !== 0);
    ?>
    <div class="prize">
        <h2>總次數：<?php echo $i ?></h2>
        <h2>總金額：<?php echo $total ?></h2>
    </div>
</body>
</html>