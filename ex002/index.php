<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("D/d/M/Y");
        echo " e a hora atual é " . date("G:i:s") . "<br>";
        const TESTE = "O nome das Consts precisa estar toda em letras maiusculas? <br>";
        $teste = "Variaveis são sempre feitas com o '$' antes do nome";
        echo TESTE . $teste;
    ?>
</body>
</html>