<?php
    $dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
    $user = "Benson";
    $password = "Benson123";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
    $pdo = new PDO($dsn, $user, $password, $options);
    $sql = "
        SELECT *
        FROM products
        WHERE psn = :psn
    ";
    $products = $pdo->prepare($sql);
    $products->bindValue(':psn', $_GET["psn"]);
    $products->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
        while($prodRow = $products->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <th>書號</th><td><?php echo $prodRow["psn"]; ?></td>
        </tr>
        <tr>
            <th>書名</th><td><?php echo $prodRow["pname"]; ?></td>
        </tr>
        <tr>
            <th>價格</th><td><?php echo $prodRow["price"]; ?></td>
        </tr>
        <tr>
            <th>作者</th><td><?php echo $prodRow["author"]; ?></td>
        </tr>
        <tr>
            <th>頁數</th><td><?php echo $prodRow["pages"]; ?></td>
        </tr>
        <tr>
            <th>圖檔</th><td><?php echo $prodRow["image"]; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>