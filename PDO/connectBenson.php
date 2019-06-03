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
    $errMsg = "";
    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=benson;charset=utf8";
        $user = "Benson";
        $password = "Benson123";
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
        $pdo = new PDO($dsn, $user, $password, $options);
    
        $amount = 100;
        $salValue = 5000;
    
        // $sql = "UPDATE emp SET sal = sal - ? WHERE sal < ?";
        // $product = $pdo->prepare($sql);
        // $product->bindValue(1, $amount);
        // $product->bindValue(2, $salValue);
        $sql = "UPDATE emp SET sal = sal + :amount WHERE sal < :salValue";
        $product = $pdo->prepare($sql);
        $product->bindValue(":amount", $amount);
        $product->bindValue(":salValue", $salValue);
        $product->execute();
        echo "異動成功";
    } catch (PDOException $e) {
        $errMsg .= $e->getMessage()."<br>";
        $errMsg .= $e->getLine()."<br>";
    }
    ?>
</body>
</html>
