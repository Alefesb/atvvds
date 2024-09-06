<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $menu = $_GET["menu"];
    $saldo = 100;
    $deposito = 0;
    
    $sair = $_GET["sair"] ?? "saldo"; 
    $value = $_GET["value"];

    switch($menu) {
        case 1 ;
        echo ($saldo);
        break;

        case 2 ;
         $saldo = $saldo + $value;
        echo ($saldo);
        break;

        case 3 ;
         $saldo = $saldo - $value;
        echo ($saldo);
        break;

        case 4 ;
        
        echo ("Saindo...");

        break;
    }

    ?>
</body>
</html>