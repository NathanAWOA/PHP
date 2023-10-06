<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Divisão</title>
    <style>
        #calc {
            font-size: 5rem;
            font-weight: bolder;
        }
        
    </style>
</head>
<body>
    <?php 
        $valor1 = $_POST["v1"] ?? 0;
        $valor2 = $_POST["v2"] ?? 1;
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Valor 1: </label>
            <input type="number" step="0.001" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2: </label>
            <input type="number" step="0.001" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Dividir">
        </form>
    </div>

    <div class="result">
        <h1>Resultado da Divisão</h1>
        <?php
            if($valor1 == 0 || $valor2 == 0){
                echo "<span id='calc'>Zero não é um número divisivel!</span>";
            } else {
                $div = $valor1 / $valor2;
                $res = $valor1 % $valor2;
                echo "
                <span id='calc'>
                <strong>$valor1</strong> <u>| <strong>$valor2</strong></u>
                <br><strong>$res</strong> | <strong>$div</strong>
                </span>";
            }
        ?>
    </div>
</body>
</html>