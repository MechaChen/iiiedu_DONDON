<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        caption {
            color: #ed7675;
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
        $directory = [
            ["94951001", "黃一丁", "09110003333", "中壢市中大路1號"],
            ["94951002", "劉二毛", "0922999887", "高雄市中山路2號"],
            ["94951003", "黃一丁", "0933555779", "台北市師大路3號"]
        ];
    ?>

    <table border="1">
        <caption>好媒媒班及通訊錄</caption>
        <thead>
            <tr>
                <th>學號</th>
                <th>姓名</th>
                <th>電話</th>
                <th>地址</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $directory[0][0]; ?></td>
                <td><?php echo $directory[0][1]; ?></td>
                <td><?php echo $directory[0][2]; ?></td>
                <td><?php echo $directory[0][3]; ?></td>
            </tr>
            <tr>
                <td><?php echo $directory[1][0]; ?></td>
                <td><?php echo $directory[1][1]; ?></td>
                <td><?php echo $directory[1][2]; ?></td>
                <td><?php echo $directory[1][3]; ?></td>
            </tr>
            <tr>
                <td><?php echo $directory[2][0]; ?></td>
                <td><?php echo $directory[2][1]; ?></td>
                <td><?php echo $directory[2][2]; ?></td>
                <td><?php echo $directory[2][3]; ?></td>
            </tr>
            <tr>
                <td><?php echo $directory[2][0]; ?></td>
                <td><?php echo $directory[2][1]; ?></td>
                <td><?php echo $directory[2][2]; ?></td>
                <td><?php echo $directory[2][3]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>