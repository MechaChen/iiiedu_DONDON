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
        // 先設定極限為多少
        $limited = 100;
        // 宣告一個陣列來儲存所有的隨機數
        $randomArray = [];
        // 用迴圈將 10 個隨機數加入陣列
        for($i=0; $i<10; $i++) {
            array_push($randomArray, rand(1,$limited));
        }
        // 印出現有陣列看一下
        print_r($randomArray);
        echo "<br>";

        // 分別宣告最大數、最小數和總和
        // 最大數一開始設成最小的
        $randomMax = 0;
        // 最小數一開始設乘最大的
        $randomMin = $limited;
        $randomTotal = 0;
        foreach($randomArray as $i => $randomNumber) {
            // 如果現在的數字比 $randomMax 還大時，用新的數替換它
            $randomMax = $randomMax < $randomNumber ? $randomNumber : $randomMax;
            // 如果現在的數字比 $randomMin 還小時，用新的數替換它
            $randomMin = $randomMin > $randomNumber ? $randomNumber : $randomMin;
            $randomTotal += $randomNumber;
        }
        echo "最大值:{$randomMax}<br>";
        echo "最小值:{$randomMin}<br>";
        echo "隨機總和:{$randomTotal}<br>";
    ?>
</body>
</html>