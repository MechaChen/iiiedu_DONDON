<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
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
    // 以人為主體下去包資料
        $directory = [
            ["94951001", "黃一丁", "0911000333", "中壢市中大路1號"],
            ["94951002", "劉二毛", "0922999887", "高雄市中山路2號"],
            ["94951003", "張大化", "0933555779", "台北市師大路3號"],
        ];
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
        <?php
            // 先以 row 下去印
            for($i=0; $i<count($directory); $i++) {
                echo "<tr>";
                // 再以 column 下去印
                for($j=0; $j<count($directory[$i]); $j++) {
                    echo "<td>{$directory[$i][$j]}</td>";
                }
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>