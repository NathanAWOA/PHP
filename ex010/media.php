<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
        }
        input {
            width: 200px;
        }
    </style>
</head>
<body>
    <?php 
        $valor1 = $_POST["valor1"] ?? 0;
        $valor2 = $_POST["valor2"] ?? 0;
        $peso1 = $_POST["peso1"] ?? 0;
        $peso2 = $_POST["peso2"] ?? 0;
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor1">1º Valor: </label>
            <input type="number" step="0.01" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="peso1">1º Peso: </label>
            <input type="number" step="0.01" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="valor2">2º Valor: </label>
            <input type="number" step="0.01" name="valor2" id="valor2" value="<?=$valor2?>">
            <label for="peso2">2º Peso: </label>
            <input type="number" step="0.01" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </div>

    <div class="result">
        <h2>Cálculo das Médias</h2>
        <?php
            $simples = ($valor1 + $valor2) / 2;
            $ponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

            echo "<p>Analisando os valores <strong>$valor1</strong> e <strong>$valor2</strong>: </p>
                <ul>
                    <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>".number_format($simples, 2, ",")."</strong></li>
                    <li>A <strong>Média Aritmética Ponderada</strong> com os pesos $peso1 e $peso2 é igual a <strong>".number_format($ponderada, 2, ",")."</strong></li>
                </ul>"; 
        ?>
    </div>
</body>
</html>