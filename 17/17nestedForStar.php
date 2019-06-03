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
        for($i=1; $i<=6; $i++) {
            $total = 0;
            for($j=1; $j<=$i; $j++) {
                $total += $j;
                if($j>=2) echo "+";
                echo $j;
            }
            echo "=$total";
            echo "<br>";
        }
    ?>
</body>
</html>