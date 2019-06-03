<?php
    $errMsg = "";
    try {
        require_once("connect.php");
        $sql = "SELECT * FROM member WHERE memId='{$_POST["memId"]}' AND memPsw='{$_POST["memPsw"]}'";
        $members = $pdo->query($sql);
    } catch (PDOException $e) {
        $errMsg .= $e->getMessage(). "<br>";
        $errMsg .= $e->getLine(). "<br>";
    }
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
    <?php
        if($errMsg != "") {
            exit($errMsg);
        }
        if($members->rowCount() == 0) {
            echo "查無此人";
        } else {
            $memRow = $members->fetch(PDO::FETCH_ASSOC);
            echo $memRow["memName"], "你好~~<br>";
        }
    ?>
</body>
</html>