<?php
    $errMsg = "";
    try {
        $dsn = "mysql:host:localhost;port=3306;dbname=books;charset=utf8";
        $user = "Benson";
        $password = "Benson123";
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
        $pdo = new PDO($dsn, $user, $password, $options);
        $sql = "select * from products";
        $pdoStatement = $pdo->query($sql);
        $prodRows = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $errMsg .= $e->getMessage(). "<br>";
        $errMsg .= $e->getLine(). "<br>";
        exit($errMsg);
    }
?>
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
    <title>query</title>
</head>
<body>
    <table>
        <tr bgcolor="#abc">
            <th>書號</th>
            <th>書名</th>
            <th>價格</th>
            <th>作者</th>
        </tr>
    <?php
        foreach($prodRows as $i => $prodRow ) {
    ?>
    <tr bgcolor="#faa">
        <td><?php echo $prodRow["psn"] ?></td>
        <td><?php echo $prodRow["pname"] ?></td>
        <td><?php echo $prodRow["price"] ?></td>
        <td><?php echo $prodRow["author"] ?></td>
    </tr>
    <?php
        }
        
    ?>
    </table>
</body>
</html>