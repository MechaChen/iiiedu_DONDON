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
        // fulfill the array with 10 numbers among 1~100
        $randomArray = [];
        for($i=0; $i<10; $i++) {
            array_push($randomArray, rand(1,100));
        }
        print_r($randomArray);
        echo "<br>";

        // find Max, min & Total
        $total = 0;
        $max = 0;
        $min = 100;
        foreach($randomArray as $i => $randomNumber) {
            $max = $max < $randomNumber ? $randomNumber : $max;
            $min = $min > $randomNumber ? $randomNumber : $min;
            $total += $randomNumber;
        }
        echo "最小值：$min<br>";
        echo "最大值：$max<br>";
        echo "總和：$total<br>";
    ?>
</body>
</html>