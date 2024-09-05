<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nota = $_GET["nota"];


    switch ($nota){
        case ($nota == 10);
        echo ("A");
        break;
        case ($nota == 9);
        echo ("B");
        break;
        case ($nota == 7);
        echo ("C");
        break;
        case ($nota == 8);
        echo ("C");
        break;
        case ($nota == 6);
        echo ("D");
        break;
        case ($nota == 5);
        echo ("D");
        break;
        case ($nota == 0);
        echo ("E");
        break;
        case ($nota == 1);
        echo ("E");
        break;
        case ($nota == 2);
        echo ("E");
        break;
        case ($nota == 3);
        echo ("E");
        break;
        case ($nota == 4);
        echo ("E");
        break;
    }
    ?>

    
</body>
</html>