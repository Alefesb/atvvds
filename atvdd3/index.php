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
    

    switch ($op){
        case ($op == "soma");
        $soma = $n1 + $n2;
        echo($soma);
        break;

        case ($op == "sub");
        $sub = $n1 - $n2;
        echo($sub);
        break;

        case ($op == "div");
        $div = $n1 / $n2;
        echo($div);
        break;

        case ($op == "mult");
        $mult = $n1 * $n2;
        echo($mult);
        break;
    }
    ?>
</body>
</html>