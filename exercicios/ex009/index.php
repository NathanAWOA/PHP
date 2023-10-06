<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
</head>
<body>
    <?php 
        $valor1 = $_POST["v1"] ?? 0;
        $valor2 = $_POST["v2"] ?? 0;
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Valor 1: </label>
            <input type="text" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2: </label>
            <input type="text" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </div>

    <div class="result">
        <h2>Resultado da Soma</h2>
        <?php
            $soma = $valor1 + $valor2;

            echo "O resultado da soma de <strong>$valor1</strong> mais <strong>$valor2</strong> é <strong>$soma</strong>"; 
        ?>
    </div>
</body>
</html>