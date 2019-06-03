<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        td {
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        $notRepeated = false;
        $poker = [];
        for($i=1; $i<=52; $i++) {
            array_push($poker, $i);
        }
        shuffle($poker);
    ?>
    <table border="1">
        <tbody>
            <?php
                for($i=1; $i<=4; $i++) {
                    echo "<tr>";
                    for($j=1; $j<=13; $j++) {
                        $number = ($i -1)*13 + $j-1;
                        echo "<td>{$poker[$number]}</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>