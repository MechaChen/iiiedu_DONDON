<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    body {
        font-size: 30px;
        font-family: sans-serif;
    }
    </style>
    <title>Document</title> 7
</head>
<body>
    <?php
    try {
        $dsn = 'mysql:host=localhost;port=3306;dbname=benson';
        $user = 'Benson';
        $password = 'Benson123';
        $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
        $pdo = new PDO($dsn, $user, $password, $options);
        echo '連線成功<br>';
        $sql = "UPDATE emp SET sal = sal - 1000 WHERE empno = 7369";
        $pdo->exec($sql);
        echo "更改成功<br>";
    } catch(PDOException $ex) {
        echo "錯誤訊息: " , $ex->getMessage(), "<br>";
        echo "錯誤行數: " , $ex->getLine(), "<br>";
    }
    ?>
</body>
</html>