<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>第17題</h2>
    <?php
        for($i=1; $i<=6; $i++) {
            $total = 0;
            for($j=1; $j<=$i; $j++) {
                $total += $j;
                // 如果有加到 2 以上的數才印加號，且印在每個數的前面
                if($j>1) echo "+";
                echo $j;
            }
            // 每行只有一個等號，故跟 total 一起印出來
            echo "={$total}";
            echo "<br>";
        }
    ?>
</body>
</html>