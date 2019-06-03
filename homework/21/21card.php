<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        td {
            text-align: center;
            padding: 10px;
            font-size: 18px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        // 先宣告一陣列，預備來儲存 1~52 的數字
        $pokerCards = [];
        // 用迴圈的方式將 1~52 加入卡牌堆中
        for($i=1; $i<=52; $i++) {
            array_push($pokerCards, $i);
        }
        // 打亂卡牌的順續
        shuffle($pokerCards);
    ?>

    <table border="1">
        <tbody>
            <?php
                // 先分 row 印
                for($i=0; $i<4; $i++) {
                    echo "<tr>";
                    // 再分 column
                    for($j=0; $j<13; $j++) {
                        // 先計算印到第 ? 個卡牌
                        $number = ($i)*13 + $j;
                        echo "<td>{$pokerCards[$number]}</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>