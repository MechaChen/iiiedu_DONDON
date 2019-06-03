<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    td {
        padding-right: 300px;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tbody>
            <?php
            for($i=1; $i<=10; $i++) {
                if($i%2 == 1) echo "<tr>";
                echo "<td>$i</td>";
                if($i%2 == 0) echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>