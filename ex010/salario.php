<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Salario</title>
</head>
<body>
    <?php 
        $sal = $_POST["sal"] ?? 0;
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="sal">Salário (R$): </label>
            <input type="number" step="0.01" name="sal" id="sal" value="<?=$sal?>">
            <p>Considerando o salário mínimo de <strong>R$1.320,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </div>

    <div class="result">
        <h2>Resultado</h2>
        <?php
            $salMin = 1320;
            //Ambos funcionaram
            //$qnt = ceil($sal / $salMin); //Esse fui eu
            $qnt = intdiv($sal, $salMin);//Esse é do Aguanabeira
            $resto = $sal % $salMin;

            echo "Quem recebe um salário de R$".number_format($sal, 2, ".", ",")." ganha <strong>".$qnt." salário mínimo</strong> + <strong>$resto</strong>."; 
        ?>
    </div>
</body>
</html>