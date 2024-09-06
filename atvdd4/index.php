<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $usuario = $_GET["usuario"];
    $senha = $_GET["senha"];

    if($usuario == "admin" && $senha == "1234"){
        echo ("Login bem sucedidido");
    } else {
        echo ("Algo de errado não está certo!");
    }
    ?>
</body>
</html>