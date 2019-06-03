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
        // $increasing = true;
        // for($i=1; $i<=6; $i++) {
        //     for($j=1; $j<=$i; $j++) {
        //         echo $i;
        //         echo "*";
        //     }
        //     if($i==5) {
        //         $increasing = false;
        //         echo $increasing ? "遞增" : "遞減";
        //     }
        //     if(!increasing) {
        //         $i-=2;
        //     }
        //     if($i<0) {
        //         break;
        //     }
        //     echo "<br>";
        // }
    ?>

    <?php
        for($i=1; $i<=6; $i++) {
            for($j=1; $j<=$i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        for($i=1; $i<=6; $i++) {
            for($j=6; $j>$i; $j--) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
</body>
</html>