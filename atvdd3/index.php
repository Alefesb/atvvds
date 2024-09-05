<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $op = $_GET["op"];
    $soma = $_GET["soma"];
    $sub = $_GET["sub"];
    $mult = $_GET["mult"];
    $div = $_GET["div"];

    switch ($op){
        case ($op == "soma");
        echo $n1 + $n2;
        break ;
    }
    ?>
</body>
</html>