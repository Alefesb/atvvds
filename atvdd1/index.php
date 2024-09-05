<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["name"];
        $idade = $_GET["idade"];

        if($idade < 18){
            echo("Acesso negado");
        }else{
            echo("Acesso permitido");
        }
    ?>
</body>
</html>