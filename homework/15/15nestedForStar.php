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
        // Top Stars
        for($i=1; $i<=6; $i++) {
            for($j=1; $j<=$i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        // Bottom Stars
        for($i=1; $i<=6; $i++) {
            for($j=6; $j>$i; $j--) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
</body>
</html>