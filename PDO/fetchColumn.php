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
    * {
        margin: 0;
        padding: 0;
    }
    body {
        font-size: 30px;
        font-family: sans-serif;
        color: indigo;
    }
    table {
        margin: 0 auto;
    }
    th, 
    td {
        padding: 5px 10px;
    }
    </style>
    <title>query</title>
</head>
<body>
    <table border="1">
        <tr bgcolor="#abc">
            <th>書號</th>
        </tr>
    <?php
        while($prodRow = $pdoStatement->fetchColumn(1) ) {
    ?>
        <tr bgcolor="#faa">
            <td><?php echo $prodRow ?></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>