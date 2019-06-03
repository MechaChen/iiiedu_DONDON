<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        caption {
            color:#ed7675;
            font-family: serif;
            font-size: 20px;
            padding-bottom: 5px;
        }
        thead th {
            background: #f9c997;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        // 資料以人為主體下去分類
        $first = ["94951001", "黃一丁", "0911000333", "中壢市中大路1號"];
        $second = ["94951002", "劉二毛", "0922999887", "高雄市中山路2號"];
        $third = ["94951003", "張大化", "0933555779", "台北市師大路3號"];
    ?>
    <table border="1">
        <caption>好媒媒班級通訊錄</caption>
        <thead>
            <tr>
                <th>學號</th>
                <th>姓名</th>
                <th>電話</th>
                <th>地址</th>
            </tr>
        </thead>
        <tbody>
            <!-- 列出資料時在另外寫列出資料的PHP，以分隔計算部分 -->
            <?php
            // 在同一 row 中分別列出不同的 td
            echo "<tr>";
            for($i=0; $i<count($first); $i++) {
                echo "<td>{$first[$i]}</td>";
            }
            echo "</tr>";
            // 在同一 row 中分別列出不同的 td
            echo "<tr>";
            for($i=0; $i<count($second); $i++) {
                echo "<td>{$second[$i]}</td>";
            }
            echo "</tr>";
            // 在同一 row 中分別列出不同的 td
            echo "<tr>";
            for($i=0; $i<count($third); $i++) {
                echo "<td>{$third[$i]}</td>";
            }
            echo "</tr>";
            ?>
        </tbody>
    </table>
</body>
</html>